@extends('layout')

@section('title', 'Lemburan')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-orange"><i class="bi bi-clock-history"></i> Lemburan</h2>

    @php
        $role = 'atasan'; // atau 'hrd', 'finance'
        $pengajuan = [
            ['nama'=>'Budi Santoso','tanggal'=>'2025-09-23','mulai'=>'18:00','selesai'=>'20:00','keterangan'=>'Proyek A','status'=>'Menunggu'],
            ['nama'=>'Siti Aminah','tanggal'=>'2025-09-22','mulai'=>'19:00','selesai'=>'21:00','keterangan'=>'Meeting','status'=>'Menunggu'],
        ];
    @endphp

    @if($role == 'atasan')
    <div class="card shadow-sm border-0">
        <div class="card-header bg-orange text-white fw-bold">
            Approval Lemburan
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="bg-orange text-white text-center">
                    <tr>
                        <th>Nama Karyawan</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pengajuan as $item)
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['tanggal'] }}</td>
                        <td>{{ $item['mulai'] }} - {{ $item['selesai'] }}</td>
                        <td>{{ $item['keterangan'] }}</td>
                        <td class="text-center">
                            <button class="btn btn-orange btn-sm">Setuju</button>
                            <button class="btn btn-orange btn-sm">Tolak</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @elseif($role == 'hrd' || $role == 'finance')
    <div class="card shadow-sm border-0">
        <div class="card-header bg-orange text-white fw-bold">
            Verifikasi / Approval Finance
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
                    @foreach($pengajuan as $item)
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
    @endif
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
