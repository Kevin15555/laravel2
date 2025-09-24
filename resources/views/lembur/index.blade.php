@extends('layout')

@section('title', 'Lemburan')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-orange"><i class="bi bi-clock-history"></i> Lemburan</h2>

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
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Yang Dikerjakan</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- data kosong --}}
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
