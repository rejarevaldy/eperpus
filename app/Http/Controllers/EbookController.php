<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use App\Exports\EbookExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\DB;
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
            "title" => "E-Buku",
            "sub" => null,
            "item" => null,
            "ebooks" => Ebook::all()
        ]);
    }

    public function userEbuku()
    {

        return view('ebook.user.index', [
            "title" => "E-Buku user",
            "sub" => null,
            "item" => null,
            "ebooks" => Ebook::paginate(12)
        ]);
    }

    public function detailBook(Ebook $ebook)
    {
        return view('ebook.detail', [
            "title" => "E-Buku",
            "sub" => "Detail",
            "item" => $ebook->judul,
            "ebook" => $ebook
        ]);
    }

    public function addBook()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        return view('ebook.new', [
            "title" => "E-Buku",
            "sub" => "Tambahkan",
            "item" => null,
        ]);
    }

    public function storeBook(Request $request)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $book = new Ebook();

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path('images'), $fileName);
            $book->gambar_pdf = $fileName;
        } else {
            $book->gambar_pdf = 'gambar_pdf.png';
        }

        $filepdf = $request->file('filepdf');
        $fileNamePdf = time() . '.' . $filepdf->extension();
        $filepdf->move(public_path('pdf'), $fileNamePdf);

        $book->judul = $request->judul;
        $book->isbn = $request->isbn;
        $book->penulis = $request->penulis;
        $book->file_pdf = $fileNamePdf;
        $book->save();

        return redirect()->back()->with('status', 'E-Buku berhasil ditambahkan');
    }

    public function editBook($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        $ebook = Ebook::find($id);

        return view('ebook.edit', [
            "title" => "E-Buku",
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

        if ($request->hasFile('filepdf')) {
            $file = $request->file('filepdf');
            $fileNamePdf = time() . '.' . $file->extension();
            $file->move(public_path('pdf'), $fileNamePdf);
            $book->file_pdf = $fileNamePdf;
        } else {
            $book->file_pdf = $book->file_pdf;
        }

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->extension();
            $file->move(public_path('images'), $fileName);
            $book->gambar_pdf = $fileName;
        } else {
            $book->gambar_pdf = $book->gambar_pdf;
        }

        $book->judul = $request->judul;
        $book->isbn = $request->isbn;
        $book->penulis = $request->penulis;

        $book->update();
        return redirect()->back()->with('status', 'E-Buku berhasil diperbarui');
    }

    public function destroy($id)
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }
        
        $book = Ebook::find($id);
        $book->delete();
        return redirect('/ebuku/');
    }


    public function exportExcel()
    {
        $file_name = 'Ebook_report_' . date('Y-m-d_H-i-s') . '.xlsx';
        return Excel::download(new EbookExport, $file_name);
    }
}
