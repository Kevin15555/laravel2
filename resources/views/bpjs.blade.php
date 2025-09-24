@extends('layout')

@section('title', 'BPJS')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-orange">Alur Proses BPJS</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            
            <!-- Step 1: Cek Data Pajak/BPJS -->
            <h5>1. Cek Data BPJS/Pajak</h5>
            <button class="btn btn-primary">Cek Data</button>
            <div class="mt-2">
                <button class="btn btn-success">Data Ada</button>
                <button class="btn btn-danger">Data Tidak Ada</button>
            </div>
            <hr>

            <!-- Step 2: Input Data Jika Tidak Ada -->
            <h5>2. Input Data Baru (Jika Tidak Ada)</h5>
            <input type="text" class="form-control mb-2" placeholder="Masukkan Nomor BPJS">
            <button class="btn btn-warning">Simpan Data Baru</button>
            <hr>

            <!-- Step 3: Validasi Data -->
            <h5>3. Validasi Data</h5>
            <div class="d-flex gap-2">
                <button class="btn btn-success">Valid</button>
                <button class="btn btn-danger">Tidak Valid</button>
            </div>
            <hr>

            <!-- Step 4: Input Gaji Pokok -->
            <h5>4. Input Gaji Pokok</h5>
            <input type="number" class="form-control mb-2" placeholder="Masukkan Gaji Pokok">
            <button class="btn btn-primary">Hitung Iuran</button>
            <div class="alert alert-info mt-2">Iuran BPJS: Rp 0</div>
            <hr>

            <!-- Step 5: Konfirmasi -->
            <h5>5. Konfirmasi Perhitungan</h5>
            <button class="btn btn-success">Setuju</button>
            <button class="btn btn-danger">Tolak</button>
            <hr>

            <!-- Step 6: Upload Bukti Setor -->
            <h5>6. Upload Bukti Setor</h5>
            <input type="file" class="form-control mb-2">
            <button class="btn btn-success">Upload</button>
            <hr>

            <!-- Step 7: Generate & Simpan Laporan -->
            <h5>7. Laporan</h5>
            <button class="btn btn-secondary">Generate Laporan</button>
            <button class="btn btn-dark">Simpan ke History</button>
        </div>
    </div>
</div>
@endsection
