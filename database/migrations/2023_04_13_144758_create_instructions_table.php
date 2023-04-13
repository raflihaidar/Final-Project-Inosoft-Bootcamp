<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructions', function (Blueprint $collection) {
            $collection->id();
            $collection->string('link_to');
            $collection->string('instruction_type');
            $collection->string('assigned_vendor');
            $collection->string('vendor_address');
            $collection->string('attention_of');
            $collection->string('quotation_no');
            $collection->string('invoice_to');
            $collection->string('customer_po');
            $collection->string('customer_contract');
            $collection->string('note');
            $collection->string('attachment');
            $collection->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instructions');
    }
}
