@extends('layout')

@section('title', 'BPJS - Karyawan')

@section('content')
<div class="container mt-4">
    <h4 class="fw-bold text-orange mb-3">BPJS - Karyawan</h4>

    <!-- Tombol -->
    <div class="mb-3">
        <button class="btn btn-orange me-2" data-bs-toggle="modal" data-bs-target="#bayarModal">
            Bayar BPJS
        </button>
        <button class="btn btn-orange me-2" data-bs-toggle="modal" data-bs-target="#approveModal">
            Select Approve
        </button>
        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#tambahModal">
            Tambah Pegawai Baru
        </button>
    </div>

    <!-- Table -->
    <div style="overflow-x: auto; margin-top:10px; padding-bottom:40px;">
        <div style="min-width:2200px;">
            <table class="table table-bordered text-center align-middle shadow-sm w-100">
                <thead>
                    <tr style="background-color: #00b050; color: #fff; font-weight: bold;">
                        <th rowspan="2">No</th>
                        <th rowspan="2">No BPJS TK</th>
                        <th rowspan="2">No BPJS Kesehatan</th>
                        <th rowspan="2">NIK</th>
                        <th rowspan="2">No. Pegawai</th>
                        <th rowspan="2">Nama</th>
                        <th rowspan="2">Tanggal Lahir</th>
                        <th rowspan="2">Tanggal Peserta</th>
                        <th colspan="2">Jumlah Rapel</th>
                        <th colspan="2">Iuran JHT TK</th>
                        <th colspan="2">Jumlah Upah</th> <!-- digeser ke sini -->
                        <th colspan="2">Iuran JP</th>
                        <th colspan="2">Iuran JKP</th>
                        <th rowspan="2">Total Iuran (Rp.)</th>
                        <th rowspan="2">Status</th>
                        <th rowspan="2">Aksi</th>
                    </tr>
                    <tr style="background-color: #00b050; color: #fff; font-size: 13px;">
                        <th>Pemberi Kerja<br>(Rp.)</th>
                        <th>Tenaga Kerja<br>(Rp.)</th>

                        <th>Pemberi Kerja<br>(Rp.)</th>
                        <th>Tenaga Kerja<br>(Rp.)</th>

                        <th>Pemberi Kerja<br>(Rp.)</th> <!-- Jumlah Upah -->
                        <th>Tenaga Kerja<br>(Rp.)</th>

                        <th>Pemberi Kerja<br>(Rp.)</th>
                        <th>Pemerintah<br>(Rp.)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="20" class="text-center">Tidak ada data</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Bayar BPJS -->
<div class="modal fade" id="bayarModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Bayar BPJS</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label>No Bukti</label>
            <input type="text" class="form-control" placeholder="Masukkan No Bukti">
          </div>
          <div class="mb-3">
            <label>Upload Bukti Pembayaran</label>
            <input type="file" class="form-control">
          </div>
          <div class="mb-3">
            <label>Keterangan</label>
            <textarea class="form-control" placeholder="Masukkan Keterangan"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Approve -->
<div class="modal fade" id="approveModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Select Approve</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label>Pilih Approver</label>
            <select class="form-select">
              <option selected>Pilih</option>
              <option>Pak Egie</option>
              <option>Pak Wan</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Tambah Pegawai -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Pegawai Baru</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
            <div class="mb-3">
            <label>NIK</label>
            <input type="text" class="form-control" placeholder="Masukkan NIK">
        </div>
        <div class="mb-3">
            <label>No Pegawai</label>
            <input type="text" class="form-control" placeholder="Masukkan No Pegawai">
        </div>
        <div class="mb-3">
            <label>Nama</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama Pegawai">
        </div>
        <div class="mb-3">
            <label>Tanggal Lahir</label>
            <input type="date" class="form-control">
        </div>
        <div class="mb-3">
            <label>Tanggal Peserta</label>
            <input type="date" class="form-control">
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-success">Simpan</button>
      </div>
    </div>
  </div>
</div>
@endsection

@push('styles')
<style>
    .btn-orange {
        background-color: #ff6600;
        color: #fff;
        font-weight: 500;
    }
    .btn-orange:hover {
        background-color: #e65c00;
        color: #fff;
    }
    .text-orange {
        color: #ff6600;
    }
</style>
@endpush
