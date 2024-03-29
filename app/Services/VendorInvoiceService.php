<?php

namespace App\Services;

use App\Repositories\InstructionRepository;
use App\Repositories\VendorInvoiceRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class VendorInvoiceService
{
    protected $invoiceRepository;
    protected $instructionRepository;

    public function __construct(VendorInvoiceRepository $invoiceRepository, InstructionRepository $instructionRepository)
    {
        $this->invoiceRepository = $invoiceRepository;
        $this->instructionRepository = $instructionRepository;
    }


    public function getAll()
    {
        $invoices = $this->invoiceRepository->getAll();
        return $invoices;
    }

    public function getById(string $id)
    {
        $invoice = $this->invoiceRepository->getById($id);
        return $invoice;
    }

    /*
    * Menambah vendor invoice
    */
    public function addVendorInvoice(array $request)
    {
      
        $validator = Validator::make($request, [
            'invoice_no' => 'required',
            'invoice_attachment' => 'required|mimes:pdf,zip',
            'supporting_document[]' => 'mimes:pdf,zip',
            'instruction_id' => 'required'
        ]);
          //jika validasi gagal
        if($validator->fails())
        {
            throw new InvalidArgumentException($validator->errors());
        }
        $data = $this->invoiceRepository->addVendorInvoice($request);
		return $data;
    }
    
    /*
    * menerima semua vendor invoice
    */
    public function receiveVendorInvoice(String $id)
    {
        $isExist =  $this->instructionRepository->getById($id);
        if($isExist == null)
        {      
            throw new InvalidArgumentException('Data not found');     
        }
        $data = $this->invoiceRepository->receiveVendorInvoice($id);
        return $data;
    }

     /*
    * Untuk melihat semua vendor invoice berdasarkan instruction id tertentu
    */
    public function getAllInstructionInvoice(string $idInstruction)
    {
        $data =  $this->invoiceRepository->getAllInstructionInvoice($idInstruction);
        return $data;
    }

    /*
    * Untuk update invoice
    */
    public function updateInvoice(array $invoice, $form)
    {
        $data = $this->invoiceRepository->updateInvoice($invoice, $form);
        return $data;
    }

    /*
    * Untuk delete invoice_attachment
    */
    public function removeAttachment(string $idInvoice)
    {
        $data = $this->invoiceRepository->removeAttachment($idInvoice);
        return $data;
    }
    /*
    * Untuk delete supporting_doccument tertentu
    */
    public function removeSupportingDocument(array $invoice, string $sup_docId)
    {
        $data = $this->invoiceRepository->removeSupportingDocument($invoice, $sup_docId);
        return $data;
    }

    /*
    * Untuk delete vendor invoice
    */
    public function deleteInvoice(array $data)
    {
        $id = $this->invoiceRepository->deleteInvoice($data);
		return $id;
    }
}