<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(User $user)
    {
        return view('user.index', [
            "title" => "User",
            "sub" => "Detail",
            "item" => $user->nama,
            "siswa" => $user,
        ]);
    }
}
