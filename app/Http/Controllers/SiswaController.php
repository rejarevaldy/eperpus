<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            return redirect('/home/');
        }

        $siswas = User::all();

        return view('siswa.index', [
            "title" => "Siswa",
            "sub" => null,
            "item" => null,
            "siswas" => $siswas->where('role', 'siswa')
        ]);
    }

    public function detailSiswa(User $user)
    {
        return view('siswa.detail', [
            "title" => "Siswa",
            "sub" => "Detail",
            "item" => $user->nama,
            "siswa" => $user,
        ]);
    }

    public function addSiswa()
    {
        $jurusan =  ['MM', 'RPL', 'DI', 'PS', 'KI', 'ANMS'];
        $kelas = [10, 11, 12, 13];
        $gender = ['Pria', 'Wanita'];
        $agama = ['Islam', 'Kristen', 'Buddha', 'Hindu'];

        return view('siswa.new', [
            "title" => "Siswa",
            "sub" => "Tambahkan",
            "item" => null,
            "jurusan" => $jurusan,
            "kelas" => $kelas,
            "gender" => $gender,
            "agama" => $agama
        ]);
    }

    public function storeSiswa(Request $request)
    {
        $password = bcrypt($request->password);

        $siswa = new User();
        $siswa->nama = $request->nama;
        $siswa->username = $request->username;
        $siswa->password = $password;
        $siswa->nis = $request->nis;
        $siswa->kelas = $request->kelas;
        $siswa->jurusan = $request->jurusan;
        $siswa->gender = $request->gender;
        $siswa->agama = $request->agama;
        $siswa->role = 'siswa';
        if ($request->has('image')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            return $siswa->gambar_user = $imageName;
        } else {
            $siswa->gambar_user = 'user.png';
        }
        $siswa->save();

        return redirect()->back()->with('status', 'Siswa berhasil ditambahkan');
    }

    public function editSiswa($id)
    {
        $siswa = User::find($id);

        $jurusan =  ['MM', 'RPL', 'DI', 'PS', 'KI', 'ANMS'];
        $kelas = [10, 11, 12, 13];
        $gender = ['Pria', 'Wanita'];
        $agama = ['Islam', 'Kristen', 'Buddha', 'Hindu'];

        return view('siswa.edit', [
            "title" => "Siswa",
            "sub" => "Edit",
            "item" => $siswa->nama,
            "siswa" => $siswa,
            "jurusan" => $jurusan,
            "kelas" => $kelas,
            "gender" => $gender,
            "agama" => $agama
        ]);
    }

    public function updateSiswa(Request $request, $id)
    {
        $siswa = User::find($id);
        $siswa->nama = $request->nama;
        $siswa->username = $request->username;
        $siswa->password = $siswa->password;
        $siswa->nis = $request->nis;
        $siswa->kelas = $request->kelas;
        $siswa->jurusan = $request->jurusan;
        $siswa->gender = $request->gender;
        $siswa->agama = $request->agama;
        $siswa->role = 'siswa';
        if ($request->has('image')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            return $siswa->gambar_user = $imageName;
        } else {
            $siswa->gambar_user = 'user.png';
        }
        $siswa->save();
        return redirect()->back()->with('status', 'Siswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        $siswa = User::find($id);
        $siswa->delete();
        return redirect('/siswa/');
    }
}
