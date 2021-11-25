<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Barryvdh\DomPDF\PDF;
use App\Exports\BookExport;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('book.index', [
            "title" => "Buku",
            "sub" => null,
            "item" => null,
            "books" => Book::all()
        ]);
    }

    public function detailBook(Book $book)
    {
        return view('book.detail', [
            "title" => "Buku",
            "sub" => "Detail",
            "item" => $book->judul,
            "book" => $book
        ]);
    }

    public function addBook()
    {
        return view('book.new', [
            "title" => "Buku",
            "sub" => "Tambahkan",
            "item" => null,
        ]);
    }

    public function storeBook(Request $request)
    {
        $image = $request->file('file');
        $imageName = time() . '.' . $image->extension();
        $image->move(public_path('images'), $imageName);

        $book = new Book();
        $book->judul = $request->judul;
        $book->isbn = $request->isbn;
        $book->penulis = $request->penulis;
        $book->stok = $request->stok;
        $book->gambar_buku = $imageName;
        $book->save();

        return redirect()->back()->with('status', 'Buku berhasil ditambahkan');
    }

    public function editBook($id)
    {
        $book = Book::find($id);

        return view('book.edit', [
            "title" => "Buku",
            "sub" => "Edit",
            "item" => $book->judul,
            "book" => $book
        ]);
    }

    public function updateBook(Request $request, $id)
    {
        $book = Book::find($id);

        if ($request->hasFile('file')) {
            $image = $request->file('file');
            $imageName = time() . '.' . $image->extension();
            $image->move(public_path('images'), $imageName);
            $book->gambar_buku = $imageName;
        } else {
            $book->gambar_buku = $book->gambar_buku;
        }

        $book->judul = $request->judul;
        $book->isbn = $request->isbn;
        $book->penulis = $request->penulis;
        $book->stok = $request->stok;

        $book->save();
        return redirect()->back()->with('status', 'Buku berhasil diperbarui');
    }

    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/buku/');
    }

    public function exportExcel()
    {
        $file_name = 'book_report_' . date('Y-m-d_H-i-s') . '.xlsx';
        return Excel::download(new BookExport, $file_name);
    }

}
