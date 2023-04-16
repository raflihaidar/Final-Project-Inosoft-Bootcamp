<?php

use App\Models\Instruction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructionController;
use App\Http\Controllers\AuthController;




Route::group([
  // 'prefix' => 'auth'
], function () {
  Route::post('register', [AuthController::class,'register']);
  Route::post('login', [AuthController::class,'login']);
  Route::group([
    // 'middleware' => 'auth:api'
  ], function(){
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class,'me']);

    Route::group([
      // 'middleware' => 'auth:api'
    ], function () {
        Route::get('instruction', [InstructionController::class,'listInstruction']);
        Route::post('instruction', [InstructionController::class,'createInstruction']);
        Route::get('instruction/listprograss', [InstructionController::class,'listOnProgress']);
        Route::get('instruction/listdraft', [InstructionController::class,'listDraft']);
        Route::get('instruction/listterminate', [InstructionController::class,'listTerminate']);
        
        Route::put('instruction/draft/{id}', [InstructionController::class,'draftInstruction']);
        Route::put('instruction/terminate/{id}', [InstructionController::class,'terminateInstruction']);
        Route::put('instruction/{id}', [InstructionController::class,'updateInstruction']);
        Route::get('instruction/{id}', [InstructionController::class,'detailInstruction']);
        Route::delete('instruction/{id}', [InstructionController::class,'deleteInstruction']);
        Route::get('/search', [InstructionController::class, 'search']);
    });
    
  });
});





