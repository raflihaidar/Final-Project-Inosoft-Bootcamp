<?php 

namespace App\Repositories;
use Illuminate\Http\Request;
use App\Models\Instruction;

class InstructionRepository
{
  private $instruction;

  public function __construct(Instruction $instruction)
  {
      $this->instruction = $instruction;
  }

  public function listInstruction()
  {
    return $this->instruction->get();
  }

  public function createInstruction(array $data)
  {
    $instruction = new Instruction();
    $instruction->link_to = $data['link_to'];
    $instruction->instruction_type = $data['instruction_type'];
    $instruction->assigned_vendor = $data['assigned_vendor'];
    $instruction->vendor_address = $data['vendor_address'];
    $instruction->attention_of = $data['attention_of'];
    $instruction->quotation_no = $data['quotation_no'];
    $instruction->invoice_to = $data['invoice_to'];
    $instruction->customer_po = $data['customer_po'];
    $instruction->customer_contract = $data['customer_contract'];
    $instruction->note = $data['note'];
    $instruction->instruction_id = $data['instruction_id'];
    $instruction->status = $data['status'];

    if (isset($data['attachment'])) {
        $path = $data['attachment']->store('attachments');
        $instruction->attachment = $path;
    }

    $instruction->save();

    return $instruction;
  }

  public function detailInstruction($id)
  {
    $dataInstruction = $this->instruction->find($id);

    return $dataInstruction;
  }

  public function listOnProgress()
  {
    return $this->instruction->where('status', '=', 'progress')->get();
  }
  public function listDraft()
  {
    return $this->instruction->where('status', '=', 'draft')->get();
  }
  public function listTerminate()
  {
    return $this->instruction->where('status', '=', 'terminate')->get();
  }

  public function updateInstruction(array $data, $id)
  {
    $instruction = $this->instruction->findOrFail($id);
    $instruction->update([
        'link_to' => $data['link_to'],
        'instruction_type' => $data['instruction_type'],
        'assigned_vendor' => $data['assigned_vendor'],
        'vendor_address' => $data['vendor_address'],
        'attention_of' => $data['attention_of'],
        'quotation_no' => $data['quotation_no'],
        'invoice_to' => $data['invoice_to'],
        'customer_po' => $data['customer_po'],
        'customer_contract' => $data['customer_contract'],
        'note' => $data['note'],
        'instruction_id' => $data['instruction_id'],
        'status' => $data['status']
    ]);

    if (isset($data['attachment'])) {
        $path = $data['attachment']->store('attachments');
        $instruction->attachment = $path;
        $instruction->save();
    }

    return $instruction;
  }

  public function draftInstruction(array $data, $id)
  {
      $instruction = $this->instruction->find($id);
      $instruction->update([
          'status' => $data['status']
      ]);
      return $instruction;
  }
  
  public function terminateInstruction(array $data, $id)
  {
    $dataInstruction = $this->instruction->find($id);
    $dataInstruction->update($data);

    return $dataInstruction;
  }
  
  public function deleteInstruction($id)
  {
    $dataInstruction = $this->instruction->find($id);
    $dataInstruction->delete();

    return 'data berhasil di delete!';
  }

 


  public function searchInstructions($query)
  {
      $instructions = $this->instruction->where('instruction_type', 'LIKE', "%{$query}%")
                                        ->orWhere('assigned_vendor', 'LIKE', "%{$query}%")
                                        ->orWhere('customer_po', 'LIKE', "%{$query}%")
                                        ->orWhere('customer_contract', 'LIKE', "%{$query}%")
                                        ->get();
      return $instructions;
  }
}

?>