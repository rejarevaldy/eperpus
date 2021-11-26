<?php

namespace App\Exports;

use App\Models\Loan;
use Maatwebsite\Excel\Concerns\FromCollection;

class LoanExport implements FromCollection
{
    public function collection()
    {
        return Loan::all('user_id', 'book_id', 'tanggal_tenggat','tanggal_dikembalikan', 'created_at', 'status');
    }
}
