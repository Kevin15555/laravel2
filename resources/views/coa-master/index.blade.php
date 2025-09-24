@extends('layout')

@section('title', 'COA Master')

@section('content')
<div class="container-fluid mt-4">
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-3 p-3 bg-orange rounded">
        <h4 class="text-white mb-0">COA Master</h4>
        <a href="{{ url()->previous() }}" class="btn btn-light btn-sm">
            <i class="bi bi-arrow-left"></i>
        </a>
    </div>

    <!-- Tabel COA di tengah -->
    <div class="d-flex justify-content-center">
        <div class="card shadow-sm w-75"> <!-- w-75 = 75% lebar layar -->
            <div class="card-body p-3">
                <table class="table table-striped table-hover">
                    <thead class="bg-orange text-white">
                        <tr>
                            <th style="width: 80px;">Kode</th>
                            <th style="width: 200px;">COA</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td rowspan="2">100</td>
                            <td>Kas Bank</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1001 - Budget Petty Cash</td>
                            <td>Uang Masuk</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>1002 - Pengeluaran Petty Cash</td>
                            <td>Uang Keluar</td>
                        </tr>
                        <tr>
                            <td rowspan="2">200</td>
                            <td>Perlengkapan Kantor</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>2001 - Alat Tulis Kantor</td>
                            <td>Pulpen, Tinta printer, HVS, Map warna</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>2002 - Kebutuhan Dokumen</td>
                            <td>Printer, jilid, fotocopy</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.bg-orange { background-color: #f97316; }
.text-orange { color: #f97316; }

.card {
    border-radius: 10px;
}
</style>
@endpush
