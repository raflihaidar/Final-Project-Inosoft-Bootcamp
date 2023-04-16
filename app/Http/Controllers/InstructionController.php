<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InstructionService;

class InstructionController extends Controller
{
    private $instructionService;
    public function __construct(InstructionService $instructionService)
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
            'status' => 'required',
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


    public function listOnProgress()
    {
        return response()->json([
            'data' => $this->instructionService->listOnProgress()
        ]);
    }
    public function listDraft()
    {
        return response()->json([
            'data' => $this->instructionService->listDraft()
        ]);
    }
    public function listTerminate()
    {
        return response()->json([
            'data' => $this->instructionService->listTerminate()
        ]);
    }


    public function updateInstruction(Request $request, $id)
    {
        return response()->json([
            'data' => $this->instructionService->updateInstruction($request, $id)
        ]);
    }

    public function draftInstruction(Request $request, $id)
    {
        $dataValidate = $request->validate([
            'status' => 'required'
        ]);
        return response()->json([
            'data' => $this->instructionService->draftInstruction($request, $id)
        ]);
    }
    public function terminateInstruction(Request $request, $id)
    {
        $dataValidate = $request->validate([
            'status' => 'required'
        ]);
        return response()->json([
            'data' => $this->instructionService->terminateInstruction($request, $id)
        ]);
    }

    public function deleteInstruction($id)
    {
        return response()->json([
            'message' => $this->instructionService->deleteInstruction($id)
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->get('q');
        $result = $this->instructionService->search($query);
        return response()->json($result);
    }
}
