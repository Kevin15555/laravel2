@extends('layout')

@section('title', 'Finance - Nota Dinas Perjalanan')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-primary">Finance - Nota Dinas Perjalanan</h2>

    <!-- Step 1: Review Data -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">Review Data Nota Dinas Perjalanan</div>
        <div class="card-body">
            <table class="table table-bordered align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Tanggal</th>
                        <th>Tujuan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Budi Santoso</td>
                        <td>21/08/2025</td>
                        <td>Jakarta</td>
                        <td><span class="badge bg-success">Disetujui</span></td>
                        <td><button class="btn btn-sm btn-info">Review</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Step 2: Proses Pembayaran -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-success text-white">Proses Pembayaran</div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Nama Karyawan</label>
                    <input type="text" class="form-control" value="Budi Santoso" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nominal Realisasi</label>
                    <input type="number" class="form-control" placeholder="Masukkan jumlah pembayaran">
                </div>
                <button type="submit" class="btn btn-success">Bayar</button>
            </form>
        </div>
    </div>

    <!-- Step 3: Upload Bukti -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-warning text-dark">Upload Bukti Pembayaran</div>
        <div class="card-body">
            <form>
                <div class="mb-3">
                    <label class="form-label">Upload File</label>
                    <input type="file" class="form-control">
                </div>
                <button class="btn btn-warning">Upload</button>
            </form>
        </div>
    </div>

    <!-- Step 4: Rekap Data -->
    <div class="card shadow-sm">
        <div class="card-header bg-dark text-white">Rekap Nota Dinas Perjalanan</div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Tujuan</th>
                        <th>Nominal</th>
                        <th>Status</th>
                        <th>Bukti</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Budi Santoso</td>
                        <td>Jakarta</td>
                        <td>2.500.000</td>
                        <td><span class="badge bg-success">Lunas</span></td>
                        <td><a href="#" class="btn btn-sm btn-dark">Lihat</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .text-primary { color: #0d6efd !important; }
</style>
@endsection
