@extends('layout')

@section('title', 'COA Master')

@section('content')
<div class="container mt-4">

    <!-- Card COA Master -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-orange text-white fw-bold">
            COA Master
        </div>
        <div class="card-body p-0">
            <table class="table table-bordered table-hover mb-0">
                <thead class="bg-orange text-white text-center">
                    <tr>
                        <th style="width: 100px;">Kode</th>
                        <th style="width: 300px;">COA</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>100</td>
                        <td>Kas Bank</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>1001</td>
                        <td>- Budget Petty Cash</td>
                        <td>Uang Masuk</td>
                    </tr>
                    <tr>
                        <td>1002</td>
                        <td>- Pengeluaran Petty Cash</td>
                        <td>Uang Keluar</td>
                    </tr>
                    <tr>
                        <td>200</td>
                        <td>Perlengkapan Kantor</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2001</td>
                        <td>- Alat Tulis Kantor</td>
                        <td>Pulpen, Tinta printer, HVS, Map warna</td>
                    </tr>
                    <tr>
                        <td>2002</td>
                        <td>- Kebutuhan Dokumen</td>
                        <td>Printer, jilid, fotocopy</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('styles')
<style>
.text-orange { color: #FF7F50 !important; }
.bg-orange { background-color: #FF7F50 !important; color: white; }
</style>
@endpush
@endsection
