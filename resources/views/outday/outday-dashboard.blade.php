@extends('layout')

@section('title', 'Out Day Dashboard')

@section('content')
<div class="container py-4">
    <h4 class="mb-3 text-orange fw-bold">Out Day Dashboard</h4>

    <!-- Filter -->
    <div class="d-flex justify-content-end mb-3">
        <select class="form-select w-auto">
            <option selected>Status: Semua</option>
            <option>Menunggu</option>
            <option>Disetujui</option>
            <option>Ditolak</option>
        </select>
    </div>

    <!-- Tabel Dashboard -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-orange text-white fw-bold text-center">
            Data Out Day Karyawan
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered mb-0 align-middle text-center">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIK</th>
                        <th>Jabatan</th>
                        <th>Jenis Izin</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Tanggal Izin</th>
                        <th>Alasan</th>
                        <th>Lampiran</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="cursor:pointer;" onclick="window.location='{{ route('outday.index') }}'">
                        <td>1</td>
                        <td>Andi</td>
                        <td>123456</td>
                        <td>Karyawan</td>
                        <td>Izin</td>
                        <td>2025-09-26</td>
                        <td>2025-09-28</td>
                        <td>Keperluan keluarga</td>
                        <td>-</td>
                        <td><span class="badge bg-warning text-dark">Menunggu</span></td>
                    </tr>
                    <tr>
                        <td colspan="10" class="text-muted">Belum ada data lain.</td>
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
.table tbody tr:hover { background-color: #fff3e0; cursor: pointer; }
</style>
@endpush
