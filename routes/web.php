<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LottoController;

Route::get('/', [MainController::class,"index"]);
Route::get('/mylogout/', [MainController::class,"logout"]);
Route::get('/lotto/', [LottoController::class,"lotto"]);
Route::post('/insert/', [MainController::class,"insert"]);
Route::get('/delete/{id}', [MainController::class,"delete"]);
// Route::get('/', function () {
//     return view('index');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
