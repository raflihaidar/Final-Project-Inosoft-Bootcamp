<?php 

namespace App\Services;

use App\Repositories\InstructionRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InstructionService
{
  private $instructionRepository;

  public function _construct(InstructionRepository $instructionRepository)
  {
    $this->instructionRepository = $instructionRepository;
  }

  public function listInstruction()
  {
    return $this->instructionRepository->listInstruction();
  }

  public function createInstruction(Request $request)
  {
    $dataInstruction = [
      'link_to' => $request->link_to,
      'instruction_type' => $request->instruction_type,
      'assigned_vendor' => $request->assigned_vendor,
      'vendor_address' => $request->vendor_address,
      'attention_of' => $request->attention_of,
      'quotation_no' => $request->quotation_no,
      'invoice_to' => $request->invoice_to,
      'customer_po' => $request->customer_po,
      'customer_contract' => $request->customer_contract,
      'note' => $request->note,
      'attachment' => $request->attachment,
    ];

    return $this->instructionRepository->createInstruction($dataInstruction);
  }

  public function detailInstruction($id)
  {
    return $this->instructionRepository->detailInstruction($id);
  }


  public function updateInstruction(Request $request, $id)
  {
    $dataInstruction = [
      'link_to' => $request->link_to,
      'instruction_type' => $request->instruction_type,
      'assigned_vendor' => $request->assigned_vendor,
      'vendor_address' => $request->vendor_address,
      'attention_of' => $request->attention_of,
      'quotation_no' => $request->quotation_no,
      'invoice_to' => $request->invoice_to,
      'customer_po' => $request->customer_po,
      'customer_contract' => $request->customer_contract,
      'note' => $request->note,
      'attachment' => $request->attachment,
    ];

    return $this->instructionRepository->updateInstruction($dataInstruction, $id);
  }


  public function deleteInstruction($id)
  {
    return $this->instructionRepository->deleteInstruction($id);
  }
}



?>