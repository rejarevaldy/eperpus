<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuditController;
use App\Http\Controllers\EbookController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;

// Auth
Route::get('/', [LoginController::class, 'index']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LogoutController::class, 'store'])->name('logout');

// User
Route::get('/user/{user:nama}', [UserController::class, 'index'])->name('user');
Route::get('/user/edit/{user:id}', [UserController::class, 'editUser'])->name('user.edit');
Route::put('/user/edit/{user:id}', [UserController::class, 'updateUser'])->name('user.update');

// Audit
Route::get('/audit', [AuditController::class, 'index'])->name('audit');
Route::get('/audit/export/excel',  [AuditController::class, 'exportExcel'])->name('audit.export');

// Loan
Route::get('/peminjaman', [LoanController::class, 'index'])->name('loan');
Route::get('/peminjaman/detail/{loan:id}', [loanController::class, 'detailLoan'])->name('loan.detail');
Route::get('/peminjaman/tambahkan', [LoanController::class, 'addLoan'])->name('loan.add');
Route::post('/peminjaman/tambahkan', [LoanController::class, 'storeLoan'])->name('loan.store');
Route::get('/peminjaman/edit/{loan:id}', [LoanController::class, 'editLoan'])->name('loan.edit');
Route::put('/peminjaman/edit/{loan:id}', [LoanController::class, 'updateLoan'])->name('loan.update');
Route::delete('/peminjaman/delete/{loan:id}', [LoanController::class, 'destroy'])->name('loan.delete');
Route::get('/peminjaman/export/excel',  [LoanController::class, 'exportExcel'])->name('loan.export');

Route::get('/peminjaman/{user:id}', [LoanController::class, 'loanUser'])->name('loan.user');


// Book
Route::get('/buku', [BookController::class, 'index'])->name('book');
Route::get('/buku/detail/{book:id}', [BookController::class, 'detailBook'])->name('book.detail');
Route::get('/buku/tambahkan', [BookController::class, 'addBook'])->name('book.add');
Route::post('/buku/tambahkan', [BookController::class, 'storeBook'])->name('book.store');
Route::get('/buku/edit/{book:id}', [BookController::class, 'editBook'])->name('book.edit');
Route::put('/buku/edit/{book:id}', [BookController::class, 'updateBook'])->name('book.update');
Route::delete('/buku/delete/{book:id}', [BookController::class, 'destroy'])->name('book.delete');
Route::get('/buku/export/excel',  [BookController::class, 'exportExcel'])->name('book.export');

// ebook
Route::get('/ebuku', [EbookController::class, 'index'])->name('ebook');
Route::get('/ebuku/detail/{book:id}', [EbookController::class, 'detailBook'])->name('ebook.detail');
Route::get('/ebuku/tambahkan', [EbookController::class, 'addBook'])->name('ebook.add');
Route::post('/ebuku/tambahkan', [EbookController::class, 'storeBook'])->name('ebook.store');
Route::get('/ebuku/edit/{book:id}', [EbookController::class, 'editBook'])->name('ebook.edit');
Route::put('/ebuku/edit/{book:id}', [EbookController::class, 'updateBook'])->name('ebook.update');
Route::delete('/ebuku/delete/{book:id}', [EbookController::class, 'destroy'])->name('ebook.delete');

// Siswa/user
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');
Route::get('/siswa/detail/{user:id}', [SiswaController::class, 'detailSiswa'])->name('siswa.detail');
Route::get('/siswa/tambahkan', [SiswaController::class, 'addSiswa'])->name('siswa.add');
Route::post('/siswa/tambahkan', [SiswaController::class, 'storeSiswa'])->name('siswa.store');
Route::get('/siswa/edit/{user:id}', [SiswaController::class, 'editSiswa'])->name('siswa.edit');
Route::put('/siswa/edit/{siswa:id}', [SiswaController::class, 'updateSiswa'])->name('siswa.update');
Route::delete('/siswa/delete/{siswa:id}', [SiswaController::class, 'destroy'])->name('siswa.delete');
Route::get('/siswa/export/excel',  [SiswaController::class, 'exportExcel'])->name('siswa.export');
