@extends('layout')

@section('title', 'Pajak - Perusahaan')

@section('content')
<div class="container mt-4">
    <h4 class="fw-bold text-orange mb-3">
        <i class="bi bi-cash-stack"></i> Pajak - Perusahaan
    </h4>

    <!-- Filter dan Tombol -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <button class="btn btn-orange me-2">Bukti</button>
            <button class="btn btn-orange">Select Approve</button>
        </div>
        <select class="form-select w-auto">
            <option selected>Status: Semua</option>
            <option>Menunggu</option>
            <option>Disetujui</option>
            <option>Ditolak</option>
        </select>
    </div>

    <!-- Tabel -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <table class="table table-bordered table-hover align-middle text-center custom-table mb-0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Pajak</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Nominal Iuran</th>
                        <th>Keterangan</th>
                        <th>Upload Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PPh 21</td>
                        <td>9</td>
                        <td>2025</td>
                        <td>Rp 10.000.000</td>
                        <td>Pajak karyawan bulan September</td>
                        <td><span class="badge bg-warning text-dark">Menunggu</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .text-orange { color: #ff6600 !important; }

    .btn-orange {
        background-color: #ff6600;
        color: #fff;
        font-weight: 500;
        border: none;
    }

    .btn-orange:hover {
        background-color: #e65c00;
        color: #fff;
    }

    /* Header tabel oranye */
    .custom-table thead th {
        background-color: #ff6600 !important;
        color: white !important;
    }

    /* Efek hover baris */
    .custom-table tbody tr:hover td {
        background-color: #fff3e5 !important;
    }
</style>
@endpush
