@extends('layout')

@section('title', 'Reimbursement')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0 fw-bold text-warning">Daftar Pengajuan Reimbursement</h4>
        <a href="{{ route('reimbursement.form') }}" class="btn btn-warning text-white">
            + Buat Pengajuan
        </a>
    </div>

    <div class="d-flex justify-content-end mb-2">
        <select class="form-select w-auto">
            <option selected>Status: Semua</option>
            <option>Menunggu</option>
            <option>Disetujui</option>
            <option>Ditolak</option>
        </select>
    </div>

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="text-white text-center">
                    <tr>
                        <th class="bg-orange">No</th>
                        <th class="bg-orange">Nama</th>
                        <th class="bg-orange">Jabatan</th>
                        <th class="bg-orange">Nomor Pengembalian</th>
                        <th class="bg-orange">Tanggal Pemakaian</th>
                        <th class="bg-orange">Bank Account</th>
                        <th class="bg-orange">Detail Pengajuan</th>
                   
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td colspan="7" class="text-muted">Belum ada data.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.bg-orange { background-color: #f97316 !important; }
.text-orange { color: #f97316 !important; }
.card { border-radius: 10px; }
</style>
@endpush
