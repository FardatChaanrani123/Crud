<?php

use App\Http\Controllers\aproposController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;

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
Route::get('/rappel',[viewController::class,'rappel'])->name('myFonction');
Route::get('/apropos',[aproposController::class,'apropos'])->name('Apropos');
Route::resource('/produit',ProduitController::class);
Route::resource('/livre',LivreController::class);
Route::resource('/client',ClientController::class);
