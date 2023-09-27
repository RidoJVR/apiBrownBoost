<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\PublicationsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::controller(ProductsController::class)->group(function () {
    Route::get('/product', 'index');

    Route::post('/product', 'store');

    Route::get('/product/{id}', 'show');

    Route::put('/product/{id}', 'update');

    Route::delete('/product/{id}', 'destroy');
});

Route::controller(PublicationsController::class)->group(function () {
    Route::get('/publication','index');

    Route::post('/publication', 'store');
    
    Route::get('/publication/{id}', 'show');

    Route::put('publication/{id}', 'update');
    
    Route::delete('publication/{id}', 'destroy');
});


