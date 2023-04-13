<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model;

class Instruction extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'instructions';

    protected $fillable = [
        'link_to',
        'instruction_type',
        'assigned_vendor',
        'vendor_address',
        'attention_of',
        'quotation_no',
        'invoice_to',
        'customer_po',
        'customer_contract',
        'note',
        'attachment'
    ];
}
