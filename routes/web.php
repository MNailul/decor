<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CheckoutController;

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
Route::get('/pesanan', [CheckoutController::class, 'listPesanan'])->name('pesanan.list');
Route::get('/pesanan/hapus', [CheckoutController::class, 'clearPesanan'])->name('pesanan.hapus');
