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

// Login
Route::get('/login', function () {
    return view(
        'login',
        [
            "title" => "Login",
            "subtitle" => ""
        ]
    );
});

// User
Route::get('/profil', function () {
    return view(
        'user.uMain',
        [
            "title" => "Profil",
            "subtitle" => ""
        ]
    );
});


// Peminjaman

Route::get('/peminjaman', function () {
    return view(
        'peminjaman.pMain',
        [
            "title" => "Peminjaman",
            "subtitle" => ""
        ]
    );
});

Route::get('/peminjaman/detail/', function () {
    return view(
        'peminjaman.pDetail',
        [
            "title" => "Peminjaman",
            "subtitle" => "Detail Peminjaman"

        ]
    );
});

Route::get('/peminjaman/new/', function () {
    return view(
        'peminjaman.pNew',
        [
            "title" => "Peminjaman",
            "subtitle" => "Tambahkan Peminjaman"

        ]
    );
});

Route::get('/peminjaman/edit/', function () {
    return view(
        'peminjaman.pEdit',
        [
            "title" => "Peminjaman",
            "subtitle" => "Edit Peminjaman"

        ]
    );
});

// Buku


Route::get('/buku', function () {
    return view(
        'buku.bMain',
        [
            "title" => "Buku",
            "subtitle" => ""
        ]
    );
});


Route::get('/buku/detail/', function () {
    return view(
        'buku.bDetail',
        [
            "title" => "Buku",
            "subtitle" => "Detail Buku"

        ]
    );
});


Route::get('/buku/new/', function () {
    return view(
        'buku.bNew',
        [
            "title" => "Buku",
            "subtitle" => "Tambahkan Buku"

        ]
    );
});

Route::get('/buku/edit/', function () {
    return view(
        'buku.bEdit',
        [
            "title" => "Buku",
            "subtitle" => "Edit Buku"

        ]
    );
});

// Siswa

Route::get('/siswa', function () {
    return view(
        'siswa.sMain',
        [
            "title" => "Siswa",
            "subtitle" => ""
        ]
    );
});

Route::get('/siswa/detail/', function () {
    return view(
        'siswa.sDetail',
        [
            "title" => "Siswa",
            "subtitle" => "Detail Siswa"

        ]
    );
});


Route::get('/siswa/new/', function () {
    return view(
        'siswa.sNew',
        [
            "title" => "Siswa",
            "subtitle" => "Tambahkan Siswa"

        ]
    );
});

Route::get('/siswa/edit/', function () {
    return view(
        'siswa.sEdit',
        [
            "title" => "Siswa",
            "subtitle" => "Edit Siswa"
        ]
    );
});


// Audit

Route::get('/audit', function () {
    return view(
        'audit.aMain',
        [
            "title" => "Audit",
            "subtitle" => ""
        ]
    );
});
