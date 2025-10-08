@extends('layout')

@section('title', 'Absensi')

@section('content')
<style>
    :root {
        --orange: #f97316;
        --orange-dark: #e3620e;
    }

    .card-header-orange {
        background-color: var(--orange);
        color: #fff;
        font-weight: 600;
        padding: 12px 20px;
        border-bottom: 1px solid var(--orange-dark);
    }

    .btn-orange {
        background-color: var(--orange);
        color: #fff;
        border: none;
        transition: background 0.2s;
    }
    .btn-orange:hover {
        background-color: var(--orange-dark);
        color: #fff;
    }

    .btn-outline-orange {
        color: var(--orange);
        border: 1px solid var(--orange);
    }
    .btn-outline-orange:hover {
        background-color: var(--orange);
        color: #fff;
    }

    .text-orange { 
        color: var(--orange); 
        font-weight: 500; 
    }

    .table thead {
        background-color: var(--orange);
        color: #fff;
    }
</style>

<div class="card shadow-sm">
    <div class="card-header card-header-orange">
        Absensi
    </div>
    <div class="card-body">

        <div class="d-flex mb-3 gap-2">
            <input type="text" class="form-control" placeholder="Nama Karyawan">
            <select class="form-select">
                <option>Jabatan</option>
            </select>
            <select class="form-select">
                <option>Lokasi</option>
            </select>
        </div>

        <div class="mb-3">
            <button class="btn btn-orange">Harian</button>
            <button class="btn btn-outline-orange">Mingguan</button>
            <button class="btn btn-outline-orange">Bulanan</button>
            <button class="btn btn-outline-orange">Tanggal</button>
        </div>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jabatan</th>
                    <th>Lokasi</th>
                    <th>Jam</th>
                    <th>Tanggal</th>
                    <th>Status Kehadiran</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Budi Santoso</td>
                    <td>Karyawan</td>
                    <td>
                        <img src="{{ asset('images/maps.jpg') }}" 
                             alt="Map Sharelife" 
                             width="120" height="80" 
                             style="border-radius:6px; object-fit:cover;">
                    </td>
                    <td>08:00</td>
                    <td>23-09-2025</td>
                    <td class="text-orange">Hadir</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
