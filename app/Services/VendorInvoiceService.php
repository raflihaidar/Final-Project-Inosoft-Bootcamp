<?php

namespace App\Http\Services;

use App\Repositories\VendorInvoiceRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class VendorInvoiceService
{
    protected $invoiceRepository;

    public function __construct()
    {
        $this->invoiceRepository = new VendorInvoiceRepository();
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
}