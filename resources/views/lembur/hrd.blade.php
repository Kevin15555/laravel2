@extends('layout')

@section('title', 'Lembur - HRD')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4 text-orange"><i class="bi bi-check2-square"></i> Verifikasi Lemburan - HRD</h2>

    @php
        $verifikasi = [
            ['nama'=>'Budi Santoso','tanggal'=>'2025-09-23','mulai'=>'18:00','selesai'=>'20:00','keterangan'=>'Proyek A','status'=>'Disetujui Atasan'],
            ['nama'=>'Siti Aminah','tanggal'=>'2025-09-22','mulai'=>'19:00','selesai'=>'21:00','keterangan'=>'Meeting','status'=>'Disetujui Atasan'],
        ];
    @endphp

    <div class="card shadow-sm border-0">
        <div class="card-header bg-orange text-white fw-bold">
            Data Verifikasi Lemburan
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-orange text-white text-center">
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
                        <td class="text-center">
                            <button class="btn btn-orange btn-sm">Setujui</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('styles')
<style>
.text-orange { color: #FF7F50 !important; }

.bg-orange { 
    background-color: #FF7F50 !important; 
    color: white; 
}

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
@endsection
