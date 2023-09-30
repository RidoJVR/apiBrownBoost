<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\PublicationsController;
use App\Http\Controllers\Api\AuthController;



Route::controller(AuthController::class)->group(function (){
    Route::post('/login', 'login');

    Route::get('/usuarios', 'index');
    Route::post('/registro', 'register');
    Route::put('/usuarios/{id}', 'update');
    Route::delete('/eliminar/{id}', 'destroy' );

});

Route::group( ['middleware' => ["auth:sanctum"]], function(){
    //rutas
    Route::get('user-profile', [AuthController::class, 'userProfile']);
    Route::get('logout', [AuthController::class, 'logout']);
});

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