<?php

namespace App\Exports;

use App\Models\Book;
use App\Models\Ebook;
use Maatwebsite\Excel\Concerns\FromCollection;

class EbookExport implements FromCollection
{
    public function collection()
    {
        return Ebook::all('judul', 'penulis', 'isbn');
    }
}

