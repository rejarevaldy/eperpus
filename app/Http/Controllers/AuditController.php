<?php

namespace App\Http\Controllers;

use App\Exports\AuditExport;
use Illuminate\Http\Request;
use OwenIt\Auditing\Models\Audit;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;

class AuditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (auth()->user()->role !== 'admin') {
            abort(403);
        }

        return view('audit.index', [
            "title" => "Audit",
            "sub" => null,
            "item" => null,
            'audits' => Audit::all()
        ]);
    }

    public function exportExcel()
    {
        $file_name = 'book_report_' . date('Y-m-d_H-i-s') . '.xlsx';
        return Excel::download(new AuditExport, $file_name);
    }
}
