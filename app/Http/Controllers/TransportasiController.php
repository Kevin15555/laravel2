<?php

namespace App\Http\Controllers;

use App\Models\Transportasi;
use Illuminate\Http\Request;
use App\Exports\TransportasiExport;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf;

class TransportasiController extends Controller
{
    // Export ke Excel
    public function exportExcel()
    {
        return Excel::download(new TransportasiExport, 'transportasi.xlsx');
    }

    // Export ke PDF
    public function exportPDF()
    {
        $data = Transportasi::all();
        $pdf = Pdf::loadView('transportasi.export-pdf', compact('data'));
        return $pdf->download('transportasi.pdf');
    }
}
