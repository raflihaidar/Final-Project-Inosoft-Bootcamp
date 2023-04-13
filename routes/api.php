<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructionController;




Route::get('instruction', [InstructionController::class,'listInstruction']);
Route::post('instruction', [InstructionController::class,'createInstruction']);
Route::put('instruction/{id}', [InstructionController::class,'detailInstruction']);
Route::get('instruction/{id}', [InstructionController::class,'updateInstruction']);
Route::delete('instruction/{id}', [InstructionController::class,'deleteInstruction']);
