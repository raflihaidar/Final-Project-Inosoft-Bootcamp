<?php

namespace App\Repositories;

use App\Models\Instruction;
use App\Models\NotesByInternals;
use App\Helpers\MongoModel;
use App\Helpers\UploadHelper;
use Carbon\Carbon;

class InstructionRepository
{
  private MongoModel $instructionModel;
  private MongoModel $vendorInvoiceModel;
  private UploadHelper $uploadHelper;

  public function __construct()
  {
    $this->instructionModel = new MongoModel('instruction');
    $this->vendorInvoiceModel = new MongoModel('vendor_invoice');
    $this->uploadHelper = new UploadHelper();
  }

  public function getAll()
  {
    $instructions = $this->instructionModel->get([]);
    return $instructions;
  }

  public function getById($id)
  {
    $instruction = $this->instructionModel->get(['_id' => $id]);
    return $instruction;
  }

  public function delete(string $id)
  {
    $instruction = $this->instructionModel->deleteQuery(['_id' => $id]);
    return $instruction;
  }

  public function create(array $data)
  {
    $newData = [
      'instruction_id' => $data['instruction_id'],
      'link_to' => $data['link_to'],
      'instruction_type' => $data['instruction_type'],
      'assigned_vendor' => $data['assigned_vendor'],
      'vendor_address' => $data['vendor_address'],
      'attention_of' => $data['attention_of'],
      'quotation_no' => $data['quotation_no'],
      'invoice_to' => $data['invoice_to'],
      'customer_po' => $data['customer_po'],
      'customer_contract' => $data['customer_contract'],
      'status' => $data['status'],
      'cost_detail' => $data['detail_cost'],
      'attachment' => null,
      'note' => $data['note'],
    ];

    if ($data['attachment'] !== null) {
      $attachments = [];
      foreach ($data['attachment'] as $file) {
        $filename = $this->uploadHelper->uploadFile($file);
        $user = auth()->user()->name;
        $created_at = Carbon::now();
        $data = [
          "_id" => (string) new \MongoDB\BSON\ObjectId(),
          "user" => $user,
          "created_at" => $created_at->toDateTimeString(),
          "file" => $filename
        ];
        array_push($attachments, $data);
      }

      $newData["attachment"] = $attachments;
    }

    $id = $this->instructionModel->save($newData);

    return $id;
  }

  public function setTerminated(array $data)
  {
    $id = $this->instructionModel->save($data);
    return $id;
  }

  public function setOnProgress(array $data)
  {
    $id = $this->instructionModel->save($data);
    return $id;
  }

  public function getByStatus(string $key)
  {
    $instruction = $this->instructionModel->get(['status' => $key]);
    return $instruction;
  }

  public function search(string $key)
  {
    return Instruction::query()
      ->where('instruction_id', 'LIKE', '%' . $key . '%')
      ->orWhere('link_to', 'LIKE', '%' . $key . '%')
      ->orWhere('instruction_type', 'LIKE', '%' . $key . '%')
      ->orWhere('assigned_vendor', 'LIKE', '%' . $key . '%')
      ->orWhere('attention_of', 'LIKE', '%' . $key . '%')
      ->orWhere('quotation_no', 'LIKE', '%' . $key . '%')
      ->orWhere('customer_po', 'LIKE', '%' . $key . '%')
      ->get();
  }

  public function getInstructionNo(string $key)
  {
    return Instruction::query()
      ->where('instruction_id', 'LIKE', '%' . $key . '%')
      ->orderByDesc('instruction_id')
      ->first();
  }

  public function save(array $editedData)
  {
    $instruction = new Instruction();
    $instruction->fill($editedData);
    $instruction->save();
    return $instruction->id;
  }
}
