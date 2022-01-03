<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $ids = User::all()->pluck('id')->toArray();

        foreach ($ids as $id) {
            $terlambat = Loan::with(['user', 'book'])->where('user_id', $id)->pluck('status')->toArray();
            $user = User::find($id);
            $user->denda =  0;
            $user->update();

            foreach ($terlambat as $status) {
                if ($status == 'Terlambat') {
                    $user = User::find($id);
                    $user->denda +=  30000;
                    $user->update();
                }
            }
        }

        return view('user.index', [
            "title" => "User",
            "sub" => "Detail",
            "item" => auth()->user()->nama,
            "user" => auth()->user(),
        ]);
    }

    public function editUser()
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        $jurusan =  ['MM', 'RPL', 'DI', 'PS', 'KI', 'ANMS'];
        $kelas = [10, 11, 12, 13];
        $gender = ['Pria', 'Wanita'];
        $agama = ['Islam', 'Kristen', 'Buddha', 'Hindu'];

        return view('user.edit', [
            "title" => "user",
            "sub" => "Edit",
            "item" => $user->nama,
            "user" => $user,
            "jurusan" => $jurusan,
            "kelas" => $kelas,
            "gender" => $gender,
            "agama" => $agama
        ]);
    }

    public function updateUser(Request $request)
    {
        $id = auth()->user()->id;
        $user = User::find($id);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            
            $user->gambar_user = $imageName;
        } else {
            $user->gambar_user = $user->gambar_user;
        }

        $user->nama = $request->nama;
        $user->nis = $request->nis;
        $user->kelas = $request->kelas;
        $user->jurusan = $request->jurusan;
        $user->gender = $request->gender;
        $user->agama = $request->agama;
        $user->role = $user->role;

        $user->update();
        return redirect()->back()->with('status', 'User berhasil diperbarui');
    }

}
