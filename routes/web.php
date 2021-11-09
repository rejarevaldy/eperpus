<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Peminjaman

Route::get('/peminjaman', function () {
    return view('peminjaman.pMain');
});

Route::get('/peminjaman/detail/', function () {
    return view('peminjaman.pDetail');
});

Route::get('/peminjaman/new/', function () {
    return view('peminjaman.pNew');
});

Route::get('/peminjaman/edit/', function () {
    return view('peminjaman.pEdit');
});

// Buku


Route::get('/buku', function () {
    return view('buku.bMain');
});


Route::get('/buku/detail/', function () {
    return view('buku.bDetail');
});


Route::get('/buku/new/', function () {
    return view('buku.bNew');
});

Route::get('/buku/edit/', function () {
    return view('buku.bEdit');
});
