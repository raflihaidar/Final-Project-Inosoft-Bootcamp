<?php

namespace App\Http\Controllers;

use App\Services\VendorInvoiceService;
use Illuminate\Http\Request;

class VendorInvoiceController extends Controller
{
    protected $invoiceService;
    public function __construct()
    {
        $this->invoiceService = new VendorInvoiceService();
    }

    public function getVendorInvoice()
    {
        $invoices = $this->invoiceService->getAll();
        return response()->json([
            "success" => true,
            "message" => "List Data Invoice",
            "data"    => $invoices
        ], 200);
    }

    public function getVendorInvoiceById($id)
    {
        $invoice = $this->invoiceService->getById($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Invoice',
            'data'    => $invoice
        ], 200);
    }
}
