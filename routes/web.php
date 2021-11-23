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
Route::get('/buku/detail/{book:id}', [BookController::class, 'detail']);
Route::get('/buku/tambahkan', [BookController::class, 'addBook']);
Route::post('/buku/tambahkan', [BookController::class, 'storeBook'])->name('book.store');
Route::get('/buku/edit/{book:id}', [BookController::class, 'editBook']);
Route::put('/buku/edit/{book:id}', [BookController::class, 'updateBook'])->name('book.update');
Route::delete('/buku/delete/{book:id}', [BookController::class, 'destroy'])->name('book.delete');

// Siswa/user

Route::get('/siswa', [SiswaController::class, 'index']);
