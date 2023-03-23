<?php

namespace App\Http\Repositories;

use App\Helpers\MongoModel;
use App\Helpers\UploadHelper;
use App\Http\Services\InstructionService;
use Carbon\Carbon;

class VendorInvoiceRepository
{
    protected $invoice;
    protected $instructionService;
    protected $uploadHelper;

    public function __construct()
    {
        $this->invoice = new MongoModel('vendor_invoice');
    }


    public function getAll() : array
    {
        $invoices = $this->invoice->get([]);
        return $invoices;
    }

    public function getById(string $id)
    {
        $data = $this->invoice->find(['_id' => $id]);
		return $data;
    }
}