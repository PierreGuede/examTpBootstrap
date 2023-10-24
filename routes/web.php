<?php

use App\Http\Controllers\LogementController;
use App\Http\Controllers\SejourController;
use App\Http\Controllers\VoyageurController;
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

Route::get('logement', [LogementController::class, 'index'])->name('logement.index');
Route::post('logement', [LogementController::class, 'store'])->name('logement.store');
Route::put('logement/{id}', [LogementController::class, 'update'])->name('logement.update');

Route::delete('logement/{id}', [LogementController::class, 'destroy'])->name('logement.destroy');


Route::get('voyageur', [LogementController::class, 'index'])->name('logement.index');
Route::post('voyageur', [VoyageurController::class, 'store'])->name('voyageur.store');
Route::put('voyageur/{id}', [VoyageurController::class, 'update'])->name('voyageur.update');
Route::delete('voyageur/{id}', [VoyageurController::class, 'destroy'])->name('voyageur.destroy');


Route::get('sejour', [SejourController::class, 'index'])->name('sejour.index');
Route::post('sejour', [SejourController::class, 'store'])->name('sejour.store');
Route::put('sejour/{id}', [SejourController::class, 'update'])->name('sejour.update');
Route::delete('sejour/{id}', [SejourController::class, 'destroy'])->name('sejour.destroy');
