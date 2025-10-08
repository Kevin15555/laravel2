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
                        <th>Iuran</th>
                        <th>Aksi</th> <!-- Kolom aksi ditambahkan -->
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>1234567890</td>
                        <td>987654321</td>
                        <td>001</td>
                        <td>John Doe</td>
                        <td>01-01-1990</td>
                        <td>01-01-2020</td>
                        <td>500.000</td>
                        <td>
                            <button class="btn btn-success btn-sm me-1">Setuju</button>
                            <button class="btn btn-danger btn-sm">Tolak</button>
                        </td>
                    </tr>
                    <!-- Jika belum ada data -->
                    <tr>
                        <td colspan="9" class="text-center">-</td>
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
