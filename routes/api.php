<?php

use App\Models\Instruction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\VendorInvoiceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group([
    'prefix' => 'instruction',
],  function(){
        Route::get('/', [InstructionController::class,'showInstructions']); // menampilkan semua data instruction        

        Route::post('/add', [InstructionController::class,'storeData']); //menambah data instruction baru
        Route::post('/edit/{id}', [InstructionController::class,'editData']); //mengedit data instruction
        Route::post('/add_draft', [InstructionController::class,'draftData']); //menambah data instruction sebagai draft
        Route::post('/terminate', [InstructionController::class,'setTerminated']); //mengubah status menjadi terminated
        Route::post('/set_on_progress', [InstructionController::class,'setOnProgress']); //mengubah status menjadi on progress
        Route::post('/delete', [InstructionController::class,'deleteInstruction']); // menghapus instruction
        Route::post('/delete/costdetail', [InstructionController::class,'deleteCostDetail']); // menghapus cost detail

        Route::get('/test', [InstructionController::class,'test']);
        Route::get('/draft', [InstructionController::class,'getDraft']); //menampilkan data instruction yang memiliki status on draft
        Route::get('/onprogress', [InstructionController::class,'getOnProgress']); //menampilkan data instruction yang memiliki status on progress
        Route::get('/completed', [InstructionController::class,'getCompleted']); //menampilkan data instruction yang memiliki status completed
        Route::get('/terminated', [InstructionController::class,'getTerminated']); //menampilkan data instruction yang memiliki status terminated
        Route::get('/search', [InstructionController::class,'search'])->name('search');   
        Route::get('/{id}', [InstructionController::class,'detailInstruction']); // menampilkan detail data instruction

        // invoice of instruction
        Route::get('/allInvoices/{id}', [VendorInvoiceController::class,'getAllInstructionInvoice'])->name('allInvoices'); //mengambil semua invoices dari instruction id tertentu
        Route::post("/addVendorInvoice", [VendorInvoiceController::class,'addVendorInvoice'])->name('addVendorInvoice'); //menambah vendor invoice
        Route::post("/receiveVendorInvoice/{id}", [VendorInvoiceController::class,'receiveVendorInvoice'])->name('receiveVendorInvoice'); //menerima vendor invoice
        Route::put('/updateInvoice/{id}', [VendorInvoiceController::class,'updateInvoice'])->name('updateInvoice');
        Route::post('/deleteSupDocument', [VendorInvoiceController::class,'removeSupportingDocument'])->name('deleteSupDocument');
        Route::delete('/deleteAttachment/{id}', [VendorInvoiceController::class,'removeAttachment'])->name('deleteAttachment');
        Route::delete('/deleteInvoice/{id}', [VendorInvoiceController::class,'destroy'])->name('deleteInvoice');
    });