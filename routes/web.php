<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

// Auth
Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

// User
Route::get('/user/{user:nama}', [UserController::class, 'index']);

// Loan
Route::get('/peminjaman', [LoanController::class, 'index']);
Route::get('/peminjaman/tambahkan', [LoanController::class, 'addLoan']);
Route::post('/peminjaman/tambahkan', [LoanController::class, 'storeLoan'])->name('loan.store');
Route::get('/peminjaman/detail/{loan:id}', [loanController::class, 'detailLoan']);
Route::get('/peminjaman/edit/{loan:id}', [LoanController::class, 'editLoan']);
Route::put('/peminjaman/edit/{loan:id}', [LoanController::class, 'updateLoan'])->name('loan.update');
Route::delete('/peminjaman/delete/{loan:id}', [LoanController::class, 'destroy'])->name('loan.delete');


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
