@extends('layout')

@section('title', 'Petty Cash')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4 text-orange"><i class="bi bi-cash-stack"></i> Petty Cash</h3>

    <div class="card shadow-sm border-0">
        <div class="card-header bg-orange text-white fw-bold">
            Daftar Petty Cash
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered">
                <thead class="bg-orange text-white text-center">
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5" class="text-center text-muted">Belum ada data</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('styles')
<style>
.text-orange { color: #f36f21 !important; }
.bg-orange { background-color: #f36f21 !important; color: white; }

/* Hover row oranye muda */
.table-hover tbody tr:hover {
    background-color: #fff3e5;
}
</style>
@endpush
@endsection
