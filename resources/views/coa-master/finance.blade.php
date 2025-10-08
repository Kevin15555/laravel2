@extends('layout')

@section('title', 'COA Master')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-between mb-3">
        <h4 class="fw-bold text-orange">COA Master</h4>
        <button class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#modalTransaksi">
            <i class="bi bi-plus-circle"></i> Tambah Transaksi
        </button>
    </div>

    {{-- Tabel Data --}}
    <div class="card shadow-sm border-0 mb-4">
        <div class="card-body p-0">
            <table class="table table-bordered table-hover mb-0 table-sm">
                <thead class="bg-orange text-white text-center">
                    <tr>
                        <th style="width: 100px;">Kode</th>
                        <th style="width: 250px;">COA</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Kas dan Bank --}}
                    <tr><td>100</td><td><b>Kas dan Bank</b></td><td></td></tr>
                    <tr><td>1001</td><td>Budget petty cash</td><td>Uang masuk</td></tr>
                    <tr><td>1002</td><td>Pengeluaran petty cash</td><td>Uang keluar</td></tr>
                    <tr><td>1003</td><td>Administrasi transfer</td><td>Adm tf gopay, bank</td></tr>

                    {{-- Perlengkapan kantor --}}
                    <tr><td>200</td><td><b>Perlengkapan kantor</b></td><td></td></tr>
                    <tr><td>2001</td><td>Alat tulis kantor</td><td>Pulpen, tinta printer, HVS, Map berwarna/bening, stempel</td></tr>
                    <tr><td>2002</td><td>Kebutuhan Dokumen</td><td>Print, jilid, fotocopy, materai</td></tr>
                    <tr><td>2002</td><td>Aset Tetap</td><td>Meja, AC, Laptop, Charger, Lemari, Printer, TV</td></tr>
                    <tr><td>2003</td><td>Aset Tetap (Semarang)</td><td>TV, Lemari, Meja Portable, Kipas Angin</td></tr>

                    {{-- Kebutuhan primer kantor --}}
                    <tr><td>300</td><td><b>Kebutuhan primer kantor</b></td><td></td></tr>
                    <tr><td>3001</td><td>Rumah tangga kantor</td><td>Sabun, sunlight, tissue, super pel</td></tr>
                    <tr><td>3002</td><td>Snack and drink</td><td>Chocolatos, teh, gula, kopi, galon</td></tr>
                    <tr><td>3003</td><td>Rumah tangga kantor (Semarang)</td><td>Sabun, sunlight, tissue, super pel, Bensin, Parkir</td></tr>

                    {{-- Transportasi --}}
                    <tr><td>400</td><td><b>Transportasi</b></td><td></td></tr>
                    <tr><td>4001</td><td>Tarif Transportasi umum</td><td>Harga tiket kereta, gojek, go send</td></tr>
                    <tr><td>4002</td><td>Biaya bensin</td><td>Bensin kendaraan apabila menggunakan kendaraan pribadi</td></tr>
                    <tr><td>4003</td><td>Biaya Parkir</td><td>Biaya parkir ketika visit suatu tempat</td></tr>
                    <tr><td>4004</td><td>Biaya Tol</td><td>Tol kendaraan bermobil</td></tr>
                    <tr><td>4005</td><td>Pengiriman Paket</td><td>Kendaraan, Motor, Mobil</td></tr>

                    {{-- Biaya lain-lain --}}
                    <tr><td>500</td><td><b>Biaya lain-lain</b></td><td></td></tr>
                    <tr><td>5001</td><td>Biaya Tak Terduga</td><td>Biaya yang tidak terduga / hanya muncul sesekali</td></tr>

                    {{-- Biaya Perjalanan Dinas --}}
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

{{-- Modal Input Transaksi --}}
<div class="modal fade" id="modalTransaksi" tabindex="-1">
  <div class="modal-dialog modal-lg"> 
    <div class="modal-content rounded-3">
      <div class="modal-header bg-orange text-white">
        <h5 class="modal-title">Input Data Transaksi</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row mb-3">
            <div class="col-md-4">
              <label class="form-label">Maincode</label>
              <input type="text" class="form-control" placeholder="Masukkan Maincode">
            </div>
            <div class="col-md-4">
              <label class="form-label">Subcode</label>
              <input type="text" class="form-control" placeholder="Masukkan Subcode">
            </div>
            <div class="col-md-4">
              <label class="form-label">COA</label>
              <select class="form-select">
                <option selected disabled>Pilih COA</option>
                <option value="1001">1001 - Budget petty cash</option>
                <option value="1002">1002 - Pengeluaran petty cash</option>
                <option value="1003">1003 - Administrasi transfer</option>
                <option value="2001">2001 - Alat tulis kantor</option>
                <option value="2002">2002 - Kebutuhan Dokumen</option>
                <option value="2003">2003 - Aset Tetap (Semarang)</option>
                <option value="3001">3001 - Rumah tangga kantor</option>
                <option value="3002">3002 - Snack and drink</option>
                <option value="4001">4001 - Tarif Transportasi umum</option>
                <option value="4002">4002 - Biaya bensin</option>
                <option value="4003">4003 - Biaya Parkir</option>
                <option value="4004">4004 - Biaya Tol</option>
                <option value="4005">4005 - Pengiriman Paket</option>
                <option value="5001">5001 - Biaya Tak Terduga</option>
                <option value="6001">6001 - Beban Perjalanan - Transportasi</option>
                <option value="6002">6002 - Beban Perjalanan - Makan & Minum</option>
                <option value="6003">6003 - Beban Perjalanan - Bensin</option>
                <option value="6004">6004 - Beban Perjalanan - E toll</option>
              </select>
            </div>
          </div>

          <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <textarea class="form-control" rows="3" placeholder="Tuliskan keterangan..."></textarea>
          </div>

          <div class="text-end">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-orange">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('styles')
<style>
.bg-orange { background-color: #FF7F50 !important; color: white; }
.text-orange { color: #FF7F50 !important; }
.btn-orange { background-color: #FF7F50; color: white; border: none; }
.btn-orange:hover { background-color: #e76b3c; }
</style>
@endpush
