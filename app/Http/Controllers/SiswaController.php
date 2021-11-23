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
    public function index(){

        if(auth()->user()->role !== 'admin'){
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
}
