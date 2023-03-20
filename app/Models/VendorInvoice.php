<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class VendorInvoice extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'vendor_invoice';
    protected $id = '_id';
    protected $fillable = [
        'invoice_no',
        'invoice_attachment',
        'supporting_document',
        'inscruction_id',
    ];
}
