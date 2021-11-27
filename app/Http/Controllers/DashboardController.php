<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use App\Models\Ebook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
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

        $currentTime = Carbon::now();

        return view('dashboard.index', [
            "title" => "Dashboard",
            "sub" => null,
            "item" => null,
            "loans" => Loan::with(['user', 'book'])->limit(5)->latest()->get(),
            "user" => User::all()->where('role','siswa')->count(),
            "book" => Book::all()->count(),
            "dikembalikan" =>  Loan::all()->where('status','Dikembalikan')->count(),
            "dipinjam" =>  Loan::all()->where('status','Dipinjam')->count(),
            "time" => $currentTime->toDateTimeString()
        ]);
    }
}
