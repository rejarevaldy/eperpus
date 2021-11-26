<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Book;
use App\Models\Loan;
use App\Models\User;
use App\Exports\LoanExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class LoanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('loan.index', [
            "title" => "Peminjaman",
            "sub" => null,
            "item" => null,
            "loans" => Loan::with(['user', 'book'])->get('*')
        ]);
    }

    public function loanUser()
    {
        $id = auth()->user()->id;

        return view('loan.user.index', [
            "title" => "Peminjaman",
            "sub" => null,
            "item" => null,
            "loans" => Loan::with(['user', 'book'])->where('user_id', $id)->get('*')
        ]);

    }

    public function detailLoan(Loan $loan)
    {

        return view('loan.detail', [
            "title" => "Peminjaman",
            "sub" => "Detail",
            "item" => $loan->id,
            "loan" => $loan::with(['user', 'book'])->find($loan->id)
        ]);
    }

    public function addLoan()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

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
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $loan = new Loan();

        $loan->user_id = $request->user;
        $loan->book_id = $request->book;
        $loan->tanggal_tenggat = $request->tanggal_tenggat;
        $loan->status = 'Dipinjam';

        $loan->save();

        return redirect()->back()->with('status', 'Peminjaman berhasil ditambahkan');
    }

    public function editLoan($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $loan = Loan::find($id);

        $status = ['Dipinjam', 'Dikembalikan', 'Terlambat'];

        return view('loan.edit', [
            "title" => "Peminjaman",
            "sub" => "Edit",
            "item" => $loan->id,
            "loan" => $loan,
            "status" => $status
        ]);
    }

    public function updateLoan(Request $request, $id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $loan = Loan::find($id);

        $loan->user_id = $loan->user_id;
        $loan->book_id = $loan->book_id;
        $loan->tanggal_dikembalikan = $request->tanggal_pengembalian;
        $loan->status = $request->status;

        $loan->update();
        return redirect()->back()->with('status', 'Peminjaman berhasil diperbarui');
    }

    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $loan = Loan::find($id);
        $loan->delete();
        return redirect('/peminjaman/');
    }

    public function exportExcel()
    {
        $file_name = 'loan_report' . date('Y-m-d_H-i-s') . '.xlsx';
        return Excel::download(new LoanExport, $file_name);
    }
}
