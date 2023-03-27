<?php

use App\Models\Instruction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Untuk Vendor Invoice Masih dicomment dulu
// Route::prefix('vendor-invoice')->group(function() {
//     Route::get('/show', 'App\Http\Controllers\VendorInvoiceController@getVendorInvoice')->name('getVendorInvoice');
//     Route::get('/show/{id}', 'App\Http\Controllers\VendorInvoiceController@getVendorInvoiceById')->name('getVendorInvoiceById');
//     Route::post('/create', 'App\Http\Controllers\VendorInvoiceController@addVendorInvoice')->name('addVendorInvoice');
//     Route::post('/update/{id}', 'App\Http\Controllers\VendorInvoiceController@updateVendorInvoice')->name('updateVendorInvoice');
//     Route::post('/delete', 'App\Http\Controllers\VendorInvoiceController@deleteVendorInvoice')->name('deleteVendorInvoice');
// });
