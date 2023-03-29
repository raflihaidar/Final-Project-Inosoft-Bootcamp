<?php

use App\Models\Instruction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructionController;

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

        Route::post('/add', 'App\Http\Controllers\InstructionController@storeData'); //menambah data instruction baru
        Route::post('/edit/{id}', 'App\Http\Controllers\InstructionController@editData'); //mengedit data instruction
        Route::post('/add_draft', 'App\Http\Controllers\InstructionController@draftData'); //menambah data instruction sebagai draft
        Route::post('/terminate', 'App\Http\Controllers\InstructionController@setTerminated'); //mengubah status menjadi terminated
        Route::post('/set_on_progress', 'App\Http\Controllers\InstructionController@setOnProgress'); //mengubah status menjadi on progress
        Route::post('/delete', 'App\Http\Controllers\InstructionController@deleteInstruction'); // menghapus instruction
        Route::post('/delete/costdetail', 'App\Http\Controllers\InstructionController@deleteCostDetail'); // menghapus cost detail

        // invoice of instruction
        Route::get('/allInvoices/{id}', 'App\Http\Controllers\VendorInvoiceController@getAllInstructionInvoice')->name('allInvoices'); //mengambil semua invoices dari instruction id tertentu
        Route::post("/addVendorInvoice", 'App\Http\Controllers\VendorInvoiceController@addVendorInvoice')->name('addVendorInvoice'); //menambah vendor invoice
        Route::post("/receiveVendorInvoice/{id}", 'App\Http\Controllers\VendorInvoiceController@receiveVendorInvoice')->name('receiveVendorInvoice'); //menerima vendor invoice
        Route::put('/updateInvoice/{id}', 'App\Http\Controllers\VendorInvoiceController@updateInvoice')->name('updateInvoice');
        Route::post('/deleteSupDocument', 'App\Http\Controllers\VendorInvoiceController@removeSupportingDocument')->name('deleteSupDocument');
        Route::delete('/deleteAttachment/{id}', 'App\Http\Controllers\VendorInvoiceController@removeAttachment')->name('deleteAttachment');
        Route::delete('/deleteInvoice/{id}', 'App\Http\Controllers\VendorInvoiceController@destroy')->name('deleteInvoice');

        Route::get('/test', 'App\Http\Controllers\InstructionController@test');
        Route::get('/draft', 'App\Http\Controllers\InstructionController@getDraft'); //menampilkan data instruction yang memiliki status on draft
        Route::get('/onprogress', 'App\Http\Controllers\InstructionController@getOnProgress'); //menampilkan data instruction yang memiliki status on progress
        Route::get('/completed', 'App\Http\Controllers\InstructionController@getCompleted'); //menampilkan data instruction yang memiliki status completed
        Route::get('/terminated', 'App\Http\Controllers\InstructionController@getTerminated'); //menampilkan data instruction yang memiliki status terminated
        Route::get('/search', 'App\Http\Controllers\InstructionController@search')->name('search');   
        Route::get('/{id}', 'App\Http\Controllers\InstructionController@detailInstruction'); // menampilkan detail data instruction
    });