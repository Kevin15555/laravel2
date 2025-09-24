<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\TransportasiExport;
use PDF;

class TransportasiExportController extends Controller
{
    public function exportExcel()
    {
        return Excel::download(new TransportasiExport, 'transportasi.xlsx');
    }

    public function exportPDF()
    {
        $data = [ 
            ['nama' => 'Mobil Dinas A', 'plat' => 'B 1234 XYZ'],
            ['nama' => 'Mobil Dinas B', 'plat' => 'B 9876 ABC'],
        ];

        $pdf = PDF::loadView('transportasi.export-pdf', compact('data'));
        return $pdf->download('transportasi.pdf');
    }
}
