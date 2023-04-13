<?php 

namespace App\Repositories;

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
    return $this->instruction->create($data);
  }

  public function detailInstruction($id)
  {
    $dataInstruction = $this->instruction->find($id);

    return $dataInstruction;
  }

  public function updateInstruction(array $data, $id)
  {
    $dataInstruction = $this->instruction->find($id);
    $dataInstruction->update($data);
    return $data;
  }

  public function deleteInstruction($id)
  {
    $dataInstruction = $this->instruction->find($id);
    $dataInstruction->delete();

    return 'data berhasil di delete!';
  }
}

?>