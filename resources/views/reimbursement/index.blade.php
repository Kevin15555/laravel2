@extends('layout')

@section('title', 'Reimbursement')

@section('content')
<div class="container py-4">

    <!-- HEADER + BUTTON -->
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0 fw-bold text-warning">Daftar Pengajuan Reimbursement</h4>
        <a href="{{ route('reimbursement.form') }}" class="btn btn-warning text-white">
            + Buat Pengajuan
        </a>
    </div>

    <!-- FILTER -->
    <div class="d-flex justify-content-end mb-2">
        <select class="form-select w-auto">
            <option selected>Status: Semua</option>
            <option>Menunggu</option>
            <option>Disetujui</option>
            <option>Ditolak</option>
        </select>
    </div>

    <!-- TABEL -->
    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="text-white text-center">
                    <tr>
                        <th class="bg-orange">No</th>
                        <th class="bg-orange">Nama</th>
                        <th class="bg-orange">Departemen</th>
                        <th class="bg-orange">Tanggal</th>
                        <th class="bg-orange">Jumlah</th>
                        <th class="bg-orange">Status</th>
                        <th class="bg-orange">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center">1</td>
                        <td>John Doe</td>
                        <td>Finance</td>
                        <td>2025-08-07</td>
                        <td>Rp 150.000</td>
                        <td>
                            <span class="badge bg-warning text-dark">Menunggu</span>
                        </td>
                        <td class="text-center">
                            <button class="btn btn-sm btn-outline-primary">Detail</button>
                        </td>
                    </tr>
                    <!-- Tambahkan data lainnya jika perlu -->
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

.card {
    border-radius: 10px;
}
</style>
@endpush
