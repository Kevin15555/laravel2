<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkomodasiController extends Controller
{
    // Halaman utama (menu tombol)
    public function index()
    {
        return view('akomodasi.transportasi');
    }

    // Halaman input data
    public function input()
    {
        return view('akomodasi.input');
    }

    // Simpan data transportasi
    public function store(Request $request)
    {
        // sementara dummy aja
        // nanti bisa disimpan ke database
        return redirect()->route('akomodasi.daftar')->with('success', 'Data transportasi berhasil disimpan!');
    }

    // Halaman daftar data
    public function daftar()
    {
        // contoh dummy data, nanti diganti dengan data dari DB
        $data = [
            [
                'nama' => 'Andi',
                'transportasi' => 'Pesawat',
                'keberangkatan' => '2025-08-25 08:00',
                'kepulangan' => '2025-08-28 17:00',
                'kode' => 'GA12345'
            ],
            [
                'nama' => 'Budi',
                'transportasi' => 'Kereta',
                'keberangkatan' => '2025-08-26 09:30',
                'kepulangan' => '2025-08-29 18:00',
                'kode' => 'KA56789'
            ]
        ];
        return view('akomodasi.daftar', compact('data'));
    }

    // Halaman export
    public function export()
    {
        return view('akomodasi.export');
    }

    // Proses export file (Excel / PDF)
    public function exportFile($type)
    {
        if ($type == 'excel') {
            return "Export ke Excel (belum diimplementasi)";
        } elseif ($type == 'pdf') {
            return "Export ke PDF (belum diimplementasi)";
        }
        return back();
    }
    public function exportExcel()
{
    return Excel::download(new AkomodasiExport, 'akomodasi.xlsx');
}

public function exportPDF()
{
    $data = Akomodasi::all();
    $pdf = PDF::loadView('akomodasi.export-pdf', compact('data'));
    return $pdf->download('akomodasi.pdf');
}

}
