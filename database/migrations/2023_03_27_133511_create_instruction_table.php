<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstructionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instruction', function (Blueprint $table) {
            $table->id();
            $table->string('assigned_vendor');
            $table->array('attachment');
            $table->string('attention_of');
            $table->array('cost_detail');
            $table->string('customer_contract');
            $table->string('customer_po');
            $table->string('instruction_id');
            $table->string('instruction_type');
            $table->string('invoice_to');
            $table->string('link_to');
            $table->string('note');
            $table->string('quotation_no');
            $table->string('status');
            $table->string('vendor_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instruction');
    }
}
