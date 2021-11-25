<?php

namespace App\Exports;

use App\Models\Loan;
use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;

class SiswaExport implements FromCollection
{
    public function collection()
    {
        return User::all('username', 'password', 'nama', 'nis','kelas', 'jurusan', 'agama', 'gender', 'role');
    }
}
