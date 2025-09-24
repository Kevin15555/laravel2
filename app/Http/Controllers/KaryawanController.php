<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function direksi()
    {
        return view('karyawan.direksi');
    }

    public function buatAkun()
    {
        return view('karyawan.buatakun');
    }

}
