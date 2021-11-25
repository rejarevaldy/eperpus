<?php

namespace App\Exports;

use App\Models\Book;
use OwenIt\Auditing\Models\Audit;
use Maatwebsite\Excel\Concerns\FromCollection;

class AuditExport implements FromCollection
{
    public function collection()
    {
        return Audit::all();
    }
}

