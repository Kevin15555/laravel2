@extends('layout')

@section('title', 'Lemburan')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-orange">
        <i class="bi bi-clock-history"></i> Lemburan
    </h2>

    <!-- Filter Status -->
    <div class="d-flex justify-content-end mb-2">
        <select class="form-select w-auto">
            <option selected>Status: Semua</option>
            <option>Menunggu</option>
            <option>Disetujui</option>
            <option>Ditolak</option>
        </select>
    </div>

    <!-- Tabel Approval -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-orange text-white fw-bold">
            Approval Lemburan
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered table-striped text-center align-middle mb-0">
                <thead class="bg-orange text-white">
                    <tr>
                        <th>Nama Karyawan</th>
                        <th>Nomor Pembayaran</th>
                        <th>Tanggal Pembayaran</th>
                        <th>Bank Account</th>
                        <th>Detail Lemburan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Andi Saputra</td>
                        <td>LB-001</td>
                        <td>2025-09-25</td>
                        <td>BCA - 123456789</td>
                        <td>Menyelesaikan laporan bulanan</td>
                        <td>
                            <span class="badge bg-warning text-dark">Menunggu</span>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm me-1">
                                <i class="bi bi-check-circle"></i> Setuju
                            </button>
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-x-circle"></i> Tolak
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="7" class="text-muted">Belum ada data lain.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .text-orange { color: #FF7F50 !important; }
    .bg-orange { background-color: #FF7F50 !important; color: white; }

    .btn-orange { 
        background-color: #FF7F50; 
        color: white; 
        border: 1px solid #FF7F50;
    }
    .btn-orange:hover {
        background-color: #e76b3c;
        border-color: #e76b3c;
        color: white;
    }
</style>
@endpush
