<?php

namespace App\Exports;

use App\Models\Book;
use Maatwebsite\Excel\Concerns\FromCollection;

class BookExport implements FromCollection
{
    public function collection()
    {
        return Book::all('judul', 'penulis', 'isbn','stok');
    }
}

