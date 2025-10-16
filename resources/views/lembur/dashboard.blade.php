@extends('layout')

@section('title', 'Lemburan Dashboard')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-orange">
        <i class="bi bi-clock-history"></i> Lemburan Dashboard
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

    <!-- Tabel Dashboard -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-orange text-white fw-bold">
            Data Lemburan
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered table-striped text-center align-middle mb-0">
                <thead class="bg-orange text-white">
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Tanggal Lembur</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Durasi</th>
                        <th>Jenis Hari</th>
                        <th>Deskripsi Pekerjaan</th>
                        <th>Alasan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="cursor:pointer;" onclick="window.location='{{ route('lembur.index') }}'">
                        <td>Andi Saputra</td>
                        <td>Staff Finance</td>
                        <td>2025-09-25</td>
                        <td>18:00</td>
                        <td>21:30</td>
                        <td>3 Jam 30 Menit</td>
                        <td>Hari Kerja</td>
                        <td>Menyelesaikan laporan bulanan</td>
                        <td>Deadline mendesak</td>
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
