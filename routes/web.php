<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AkunIotaController;
use App\Http\Controllers\AkomodasiController;
use App\Http\Controllers\TransportasiExportController;

Route::get('/dashboard', function () {
    return view('dashboard', [
        'total' => 120,
        'tetap' => 30,
        'kontrak' => 30,
        'magang' => 15
    ]);
})->name('dashboard');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/karyawan/direksi', function () {
    return view('karyawan.direksi'); 
})->name('karyawan.direksi');

Route::get('/absensi', function () {
    return view('absensi.absensi');
})->name('absensi');

Route::get('/absensi/history', function () {
    return view('absensi.history');
})->name('history.absen');

Route::get('/absensi/form', function () {
    return view('absensi.form');
})->name('absensi.form');

Route::get('/absensi/edit', function () {
    return view('absensi.edit');
})->name('absensi.edit');

Route::get('/pengajuan', function () {
    return view('absensi.pengajuan');
})->name('pengajuan');

Route::get('/outday', function () {
    return view('outday.karyawan');
})->name('outday.karyawan');

Route::get('/reimbursement', function () {
    return view('reimbursement.index');
})->name('reimbursement.index');

Route::get('/reimbursement/form', function () {
    return view('reimbursement.form');
})->name('reimbursement.form');

Route::get('/surat', function () {
    return view('surat.index');
})->name('surat.index');

Route::get('/akomodasi', function () {
    return view('akomodasi');
});

Route::get('/outday/atasan', function () {
    return view('outday.atasan');
})->name('outday.atasan');

Route::get('/dinas', function () {
    return view('dinas.dashboard');
})->name('dinas.dashboard');

Route::get('/dinas/karyawan', function () {
    return view('dinas.karyawan');
});
Route::get('/dinas/atasan', function () {
    return view('dinas.atasan');
});
Route::get('/dinas/hrd', function () {
    return view('dinas.hrd');
});
Route::get('/dinas/keuangan', function () {
    return view('dinas.keuangan');
});

Route::prefix('npd')->group(function () {
    Route::get('/', function () { return view('npd.index'); })->name('npd.index');
    Route::get('/itinerary', function () { return view('npd.itinerary'); })->name('npd.itinerary');
    Route::get('/{id}/detail', function ($id) { return view('npd.detail', ['id' => $id]); })->name('npd.detail');
});

Route::get('/npd/export', function () {
    return view('npd.export');
});
Route::get('/npd/export/confirm', function () {
    return view('npd.export-confirm');
});
Route::get('/npd_karyawan/karyawan', function () {
    return view('npd_karyawan.karyawan');
});

Route::get('/npd_karyawan/form', function () {
    return view('npd_karyawan.form');
});
Route::get('/npd_karyawan/draft', function () {
    return view('npd_karyawan.draft');
});
Route::get('/npd_karyawan/realisasi', function () {
    return view('npd_karyawan.realisasi');
});

Route::get('/bpjs', function () {
    return view('bpjs.index');
})->name('bpjs.index');


Route::get('/pajak', function () {
    return view('pajak.index');
})->name('pajak.index');


Route::get('/akun-iota', function () {
    return view('auth.akun-iota');
})->name('akun-iota');


Route::get('/buat-akun', function () {
    return view('auth.buat-akun');
})->name('buat-akun');


Route::post('/buat-akun', function (Request $request) {

    return redirect()->route('akun-iota');
})->name('buat-akun.store');

Route::get('/lembur', function () {
    return view('lembur.index');
})->name('lembur.index');

Route::get('/lembur/hrd', function () {
    return view('lembur.hrd');
});

Route::get('/bpjs', function () {
    return view('bpjs.index'); 
})->name('bpjs.index');

Route::get('/coa-master', function () {
    return view('coa-master.index');
})->name('coa.master');


Route::get('/akomodasi', function () {
    return view('akomodasi.index');
})->name('akomodasi.index');