<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', [BukuController::class, 'dashboard'])->name('home');
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/edit/{kode}', [BukuController::class, 'edit'])->name('buku.edit');
Route::post('/buku/update', [BukuController::class, 'update'])->name('buku.update');
Route::post('/buku/delete', [BukuController::class, 'destroy'])->name('buku.destroy');
Route::get('/buku/cetak', [BukuController::class, 'cetak'])->name('buku.cetak');
