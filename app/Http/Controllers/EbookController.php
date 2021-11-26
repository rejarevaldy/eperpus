<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EbookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('ebook.index', [
            "title" => "EBuku",
            "sub" => null,
            "item" => null,
            "ebooks" => Ebook::all()
        ]);
    }

    public function detailBook(Ebook $ebook)
    {
        return view('book.detail', [
            "title" => "EBuku",
            "sub" => "Detail",
            "item" => $ebook->judul,
            "ebooks" => $ebook
        ]);
    }

    public function addBook()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        return view('ebook.new', [
            "title" => "EBuku",
            "sub" => "Tambahkan",
            "item" => null,
        ]);
    }

    public function storeBook(Request $request)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $file = $request->file('file');
        $fileName = time() . '.' . $file->extension();
        $file->move(public_path('pdf'), $fileName);

        $book = new Ebook();
        $book->judul = $request->judul;
        $book->isbn = $request->isbn;
        $book->penulis = $request->penulis;
        $book->file_pdf = $fileName;
        $book->save();

        return redirect()->back()->with('status', 'EBuku berhasil ditambahkan');
    }

    public function editBook($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $ebook = Ebook::find($id);

        return view('ebook.edit', [
            "title" => "EBuku",
            "sub" => "Edit",
            "item" => $ebook->judul,
            "ebook" => $ebook
        ]);
    }

    public function updateBook(Request $request, $id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $book = Ebook::find($id);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path('pdf'), $fileName);
            $book->file_pdf = $fileName;
        } else {
            $book->file_pdf = $book->file_pdf;
        }

        $book->judul = $request->judul;
        $book->isbn = $request->isbn;
        $book->penulis = $request->penulis;
        $book->file_pdf = $fileName;

        $book->save();
        return redirect()->back()->with('status', 'Buku berhasil diperbarui');
    }

    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }
        
        $book = Ebook::find($id);
        $book->delete();
        return redirect('/buku/');
    }


}
