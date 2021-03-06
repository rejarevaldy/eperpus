<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Exports\SiswaExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class SiswaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
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
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }


        return view('siswa.detail', [
            "title" => "Siswa",
            "sub" => "Detail",
            "item" => $user->nama,
            "siswa" => $user,
        ]);
    }

    public function addSiswa()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

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
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $siswa = new User();
        $password = bcrypt($request->password);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);

            $siswa->gambar_user = $imageName;
        } else {
            $siswa->gambar_user = 'user.png';
        }

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

        return redirect()->back()->with('status', 'Siswa berhasil ditambahkan');
    }

    public function editSiswa($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

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
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $siswa = User::find($id);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);

            $siswa->gambar_user = $imageName;
        } else {
            $siswa->gambar_user = $siswa->gambar_user;
        }

        $siswa->nama = $request->nama;
        $siswa->username = $request->username;
        $siswa->password = $siswa->password;
        $siswa->nis = $request->nis;
        $siswa->kelas = $request->kelas;
        $siswa->jurusan = $request->jurusan;
        $siswa->gender = $request->gender;
        $siswa->agama = $request->agama;
        $siswa->role = 'siswa';

        $siswa->update();
        return redirect()->back()->with('status', 'Siswa berhasil diperbarui');
    }

    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $siswa = User::find($id);
        $siswa->delete();
        return redirect('/siswa/');
    }

    public function exportExcel()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $file_name = 'siswa_report_' . date('Y-m-d_H-i-s') . '.xlsx';
        return Excel::download(new SiswaExport, $file_name);
    }
}
