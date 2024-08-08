<?php

use App\Http\Controllers\KursusController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('kursus')->group(function () {
    Route::get('/', [KursusController::class, 'index']);
    Route::get('/detail/{id}', [KursusController::class, 'show']);
    Route::get('/create',[KursusController::class, 'create'] );
    Route::post('/', [KursusController::class, 'store']);
    Route::get('/edit/{id}', [KursusController::class, 'edit']);
    Route::put('/{id}', [KursusController::class, 'update']);
    Route::delete('/{id}', [KursusController::class, 'destroy']);
});

