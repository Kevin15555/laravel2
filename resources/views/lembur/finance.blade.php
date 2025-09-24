@extends('layout')

@section('title', 'Lembur - Finance')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Persetujuan Lemburan - Finance</h2>

    @php
        $verifikasi = [
            ['nama'=>'Budi Santoso','tanggal'=>'2025-09-23','mulai'=>'18:00','selesai'=>'20:00','keterangan'=>'Proyek A','status'=>'Disetujui HRD'],
            ['nama'=>'Siti Aminah','tanggal'=>'2025-09-22','mulai'=>'19:00','selesai'=>'21:00','keterangan'=>'Meeting','status'=>'Disetujui HRD'],
        ];
    @endphp

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-orange">
                    <tr>
                        <th>Nama Karyawan</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Keterangan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($verifikasi as $item)
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['tanggal'] }}</td>
                        <td>{{ $item['mulai'] }} - {{ $item['selesai'] }}</td>
                        <td>{{ $item['keterangan'] }}</td>
                        <td>{{ $item['status'] }}</td>
                        <td><button class="btn btn-orange btn-sm">Setujui</button></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
