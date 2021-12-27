<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;

class RegisterController extends Controller
{
    public function index()
    {
        $jurusan =  ['MM', 'RPL', 'DI', 'PS', 'KI', 'ANMS'];
        $kelas = [10, 11, 12, 13];
        $gender = ['Pria', 'Wanita'];
        $agama = ['Islam', 'Kristen', 'Buddha', 'Hindu'];

        return view('auth.register', [
            "jurusan" => $jurusan,
            "kelas" => $kelas,
            "gender" => $gender,
            "agama" => $agama
        ]);
    }

    public function storeUser(Request $request)
    {
        $siswa = new User();
        $password = bcrypt($request->password);

        $siswa->gambar_user = 'user.png';

        $siswa->nama = $request->nama;
        $siswa->username = $request->username;
        $siswa->password = $password;
        $siswa->nis = $request->nis;
        $siswa->kelas = $request->kelas;
        $siswa->jurusan = $request->jurusan;
        $siswa->gender = $request->gender;
        $siswa->agama = $request->agama;
        $siswa->role = 'siswa';

        $siswa->save();

        return redirect('/login/');
    }
}
