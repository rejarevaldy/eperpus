<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;

// Auth
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

// Book
Route::get('/buku', [BookController::class, 'index']);
Route::get('/buku/detail/{book:id}', [BookController::class, 'detailBook']);
Route::get('/buku/tambahkan', [BookController::class, 'addBook']);
Route::post('/buku/tambahkan', [BookController::class, 'storeBook'])->name('book.store');
Route::get('/buku/edit/{book:id}', [BookController::class, 'editBook']);
Route::put('/buku/edit/{book:id}', [BookController::class, 'updateBook'])->name('book.update');
Route::delete('/buku/delete/{book:id}', [BookController::class, 'destroy'])->name('book.delete');

// Siswa/user
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/detail/{user:id}', [SiswaController::class, 'detailSiswa']);
Route::get('/siswa/tambahkan', [SiswaController::class, 'addSiswa']);
Route::post('/siswa/tambahkan', [SiswaController::class, 'storeSiswa'])->name('siswa.store');
Route::get('/siswa/edit/{user:id}', [SiswaController::class, 'editSiswa']);
Route::put('/siswa/edit/{siswa:id}', [siswaController::class, 'updateSiswa'])->name('siswa.update');
Route::delete('/siswa/delete/{siswa:id}', [siswaController::class, 'destroy'])->name('siswa.delete');
