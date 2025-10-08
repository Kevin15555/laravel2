@extends('layout')

@section('title', 'COA Master')

@section('content')
<div class="container mt-4">
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
                    <!-- Kas dan Bank -->
                    <tr><td>100</td><td><b>Kas dan Bank</b></td><td></td></tr>
                    <tr><td>1001</td><td>Budget petty cash</td><td>Uang masuk</td></tr>
                    <tr><td>1002</td><td>Pengeluaran petty cash</td><td>Uang keluar</td></tr>
                    <tr><td>1003</td><td>Administrasi transfer</td><td>Adm tf gopay, bank</td></tr>

                    <!-- Perlengkapan kantor -->
                    <tr><td>200</td><td><b>Perlengkapan kantor</b></td><td></td></tr>
                    <tr><td>2001</td><td>Alat tulis kantor</td><td>Pulpen, tinta printer, HVS, Map berwarna/bening, stempel</td></tr>
                    <tr><td>2002</td><td>Kebutuhan Dokumen</td><td>Print, jilid, fotocopy, materai</td></tr>
                    <tr><td>2002</td><td>Aset Tetap</td><td>Meja, AC, Laptop, Charger, Lemari, Printer, TV</td></tr>
                    <tr><td>2003</td><td>Aset Tetap (Semarang)</td><td>TV, Lemari, Meja Portable, Kipas Angin</td></tr>

                    <!-- Kebutuhan primer kantor -->
                    <tr><td>300</td><td><b>Kebutuhan primer kantor</b></td><td></td></tr>
                    <tr><td>3001</td><td>Rumah tangga kantor</td><td>Sabun, sunlight, tissue, super pel</td></tr>
                    <tr><td>3002</td><td>Snack and drink</td><td>Chocolatos, teh, gula, kopi, galon</td></tr>
                    <tr><td>3003</td><td>Rumah tangga kantor (Semarang)</td><td>Sabun, sunlight, tissue, super pel, Bensin, Parkir</td></tr>

                    <!-- Transportasi -->
                    <tr><td>400</td><td><b>Transportasi</b></td><td></td></tr>
                    <tr><td>4001</td><td>Tarif Transportasi umum</td><td>Harga tiket kereta, gojek, go send</td></tr>
                    <tr><td>4002</td><td>Biaya bensin</td><td>Bensin kendaraan apabila menggunakan kendaraan pribadi</td></tr>
                    <tr><td>4003</td><td>Biaya Parkir</td><td>Biaya parkir ketika visit suatu tempat</td></tr>
                    <tr><td>4004</td><td>Biaya Tol</td><td>Tol kendaraan bermobil</td></tr>
                    <tr><td>4005</td><td>Pengiriman Paket</td><td>Kendaraan, Motor, Mobil</td></tr>

                    <!-- Biaya lain-lain -->
                    <tr><td>500</td><td><b>Biaya lain-lain</b></td><td></td></tr>
                    <tr><td>5001</td><td>Biaya Tak Terduga</td><td>Biaya yang tidak terduga / hanya muncul sesekali</td></tr>

                    <!-- Biaya Perjalanan Dinas -->
                    <tr><td>600</td><td><b>Biaya Perjalanan Dinas</b></td><td></td></tr>
                    <tr><td>6001</td><td>Beban Perjalanan - Transportasi</td><td></td></tr>
                    <tr><td>6002</td><td>Beban Perjalanan - Makan & Minum</td><td></td></tr>
                    <tr><td>6003</td><td>Beban Perjalanan - Bensin</td><td></td></tr>
                    <tr><td>6004</td><td>Beban Perjalanan - E toll</td><td></td></tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('styles')
<style>
.bg-orange { background-color: #FF7F50 !important; color: white; }
</style>
@endpush
@endsection
