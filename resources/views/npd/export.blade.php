@extends('layout')

@section('title', 'Export Data NPD')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Export Data NPD</h2>

    <div class="card shadow-sm">
        <div class="card-body">
            <p>Data NPD siap diexport.</p>

            <div class="alert alert-info">
                Pilih tombol di bawah untuk melanjutkan export.
            </div>

            <a href="{{ url('/npd/export/confirm') }}" class="btn btn-secondary">Export</a>
            <a href="{{ url('/npd') }}" class="btn btn-outline-secondary">Kembali</a>
        </div>
    </div>

    <div class="card shadow-sm mt-4">
        <div class="card-body">
            <h5>Preview Data</h5>
            <table class="table table-bordered mt-3">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Tanggal</th>
                        <th>Tujuan</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Budi Santoso</td>
                        <td>21/08/2025</td>
                        <td>Jakarta</td>
                        <td><span class="badge bg-warning">Menunggu</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Ani Lestari</td>
                        <td>25/08/2025</td>
                        <td>Bandung</td>
                        <td><span class="badge bg-success">Disetujui</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
