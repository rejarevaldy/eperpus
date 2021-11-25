<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoanController extends Controller
{
    public function index()
    {
        return view('loan.index', [
            "title" => "Peminjaman",
            "sub" => null,
            "item" => null,
            "loans" => Loan::with(['user', 'book'])->get('*')
        ]);
    }

    public function addLoan()
    {
        return view('loan.new', [
            "title" => "Peminjaman",
            "sub" => "Tambahkan",
            "item" => null,
            "users" => User::where('role', 'siswa')->get(),
            "books" => Book::all(),
        ]);
    }

    public function storeLoan(Request $request)
    {
        dd($request);

        $loan = new Loan();

        $loan->user_id = $request->user;
        $loan->book_id = $request->book;
    }
}
