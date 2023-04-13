<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InstructionService;

class InstructionController extends Controller
{
    private $instructionService;
    public function _construct(InstructionService $instructionService)
    {
        $this->instructionService = $instructionService;
    }

    public function listInstruction()
    {
        return response()->json([
            'data' => $this->instructionService->listInstruction()
            // 'data' => "Hallo"
        ]);
    }

    public function createInstruction(Request $request)
    {
        $dataValidate = $request->validate([
            // 'instruction_id' => 'required',
            'link_to' => 'required',
            'instruction_type' => 'required',
            'assigned_vendor' => 'required',
            'vendor_address' => 'required',
            'attention_of' => 'required',
            'quotation_no' => 'required',
            'invoice_to' => 'required',
            'customer_po' => 'required',
            'customer_contract' => 'required',
            'note' => 'required',
            'attachment' => 'mimes:pdf,zip',
        ]);
        $instruction = $this->instructionService->createInstruction($request); 

        return response()->json([
            'data' => $instruction
        ]);
    }

    public function detailInstruction($id)
    {
        return response()->json([
            'data' => $this->instructionService->detailInstruction($id)
        ]);
    }

    public function updateInstruction(Request $request, $id)
    {
        $dataValidate = $request->validate([
            'instruction_id' => 'required',
            'link_to' => 'required',
            'instruction_type' => 'required',
            'assigned_vendor' => 'required',
            'vendor_address' => 'required',
            'attention_of' => 'required',
            'quotation_no' => 'required',
            'invoice_to' => 'required',
            'customer_po' => 'required',
            'customer_contract' => 'required',
            'note' => 'required',
            'attachment' => 'mimes:pdf,zip',
        ]);

        return response()->json([
            'data' => $this->instructionService->updateInstruction($request, $id)
        ]);
    }

    public function deleteInstruction($id)
    {
        return response()->json([
            'message' => $this->instructionService->deleteInstruction($id)
        ]);
    }
}
