<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CoffeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kopi/coffe',[CoffeController::class,'kopi']);
Route::get('/kopi/detail/{id}',[CoffeController::class,'show']);

Route::get('/baristas/barista', [\App\Http\Controllers\BaristaController::class,'barista']);
Route::get('/baristas/detail/{id}', [\App\Http\Controllers\BaristaController::class,'showb']);

Route::get('/toko/all',[\App\Http\Controllers\TokoController::class,'showToko']);
Route::get('toko/all/{id}',[\App\Http\Controllers\TokoController::class,'detailToko']);
