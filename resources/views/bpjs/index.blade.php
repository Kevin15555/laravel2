@extends('layout')

@section('title', 'BPJS - Karyawan')

@section('content')
<div class="container mt-4">
    <h4 class="fw-bold text-orange mb-3">BPJS - Karyawan</h4>

    <!-- Tombol -->
    <div class="mb-3">
        <button class="btn btn-orange me-2">Bukti</button>
        <button class="btn btn-orange">Select Approve</button>
    </div>

    <!-- Tabel -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>No BPJS TK</th>
                        <th>NIK</th>
                        <th>No.Pegawai</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Tgl Peserta</th>
                        <th>Upah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="8" class="text-center">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .btn-orange {
        background-color: #ff6600;
        color: #fff;
        font-weight: 500;
    }
    .btn-orange:hover {
        background-color: #e65c00;
        color: #fff;
    }
    .text-orange {
        color: #ff6600;
    }
</style>
@endpush
