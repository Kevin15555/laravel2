@extends('layout')

@section('title', 'Lembur - Atasan')

@section('content')
<div class="container-fluid">
    <h2 class="mb-4">Approval Lemburan - Atasan</h2>

    @php
        $pengajuan = [
            ['nama'=>'Budi Santoso','tanggal'=>'2025-09-23','mulai'=>'18:00','selesai'=>'20:00','keterangan'=>'Proyek A','status'=>'Menunggu'],
            ['nama'=>'Siti Aminah','tanggal'=>'2025-09-22','mulai'=>'19:00','selesai'=>'21:00','keterangan'=>'Meeting','status'=>'Menunggu'],
        ];
    @endphp

    <div class="card shadow-sm">
        <div class="card-body">
            <table class="table table-bordered">
                <thead class="table-light">
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
                        <td class="text-orange">{{ $item['nama'] }}</td>
                        <td class="text-orange">{{ $item['tanggal'] }}</td>
                        <td class="text-orange">{{ $item['mulai'] }} - {{ $item['selesai'] }}</td>
                        <td class="text-orange">{{ $item['keterangan'] }}</td>
                        <td>
                            <button class="btn btn-orange btn-sm">Setuju</button>
                            <button class="btn btn-dark btn-sm">Tolak</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .text-orange {
        color: #ff7f00; /* teks kolom jadi orange */
        font-weight: 500;
    }

    .btn-orange {
        background-color: #ff7f00;
        color: white;
        border: none;
    }

    .btn-orange:hover {
        background-color: #e67300;
    }

    .btn-dark {
        background-color: #d9534f;
        color: white;
        border: none;
    }

    .btn-dark:hover {
        background-color: #c9302c;
    }
</style>
@endsection
