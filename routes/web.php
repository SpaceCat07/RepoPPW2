<?php

use App\Http\Controllers\BukuController;
use App\Http\Controllers\percobaanController;
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

Route::get('/buku', [BukuController::class, 'index']);

Route::post('/buku', [BukuController::class, 'store']) -> name ('buku.store');
Route::get('/buku/create', [BukuController::class, 'create']) -> name ('buku.create');

Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
Route::post('/buku/edit/{id}', [BukuController::class, 'update'])->name('buku.update');