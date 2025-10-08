@extends('layout')

@section('title', 'Pajak - Perusahaan')

@section('content')
<div class="container mt-4">
    <h4 style="color:#ff6600;" class="fw-bold mb-3">Pajak - Perusahaan</h4>

    <!-- Tombol -->
    <div class="mb-3">
        <button style="background-color:#ff6600;color:#fff;font-weight:500;border:none;padding:6px 12px;margin-right:8px;">
            Bukti
        </button>
        <button style="background-color:#ff6600;color:#fff;font-weight:500;border:none;padding:6px 12px;margin-right:8px;">
            Select Approve
        </button>
        <!-- Tombol Tambah Pegawai Baru -->
        <button type="button" class="btn" 
            style="background-color:#ff6600;color:#fff;font-weight:500;border:none;padding:6px 12px;margin-right:8px;"
            data-bs-toggle="modal" data-bs-target="#tambahPegawaiModal">
            Tambah Pegawai Baru
        </button>
        <!-- Tombol Input Pajak Perusahaan Baru -->
        <button type="button" class="btn"
            style="background-color:#ff6600;color:#fff;font-weight:500;border:none;padding:6px 12px;"
            data-bs-toggle="modal" data-bs-target="#inputPajakModal">
            Input Pajak Perusahaan Baru
        </button>
    </div>

    <!-- Tabel -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead style="background-color:#ff6600;color:#fff;">
                    <tr>
                        <th>No</th>
                        <th>PPh</th>
                        <th>PPN</th>
                        <th>PPnBM</th>
                        <th>PBB</th>
                        <th>Iuran pajak</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="text-align:center;">
                        <td>1</td>
                        <td>100.000</td>
                        <td>50.000</td>
                        <td>30.000</td>
                        <td>20.000</td>
                        <td>200.000</td>
                        <td>-</td>
                    </tr>
                    <tr style="text-align:center;">
                        <td colspan="7">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Tambah Pegawai Baru -->
<div class="modal fade" id="tambahPegawaiModal" tabindex="-1" aria-labelledby="tambahPegawaiLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#ff6600;color:#fff;">
        <h5 class="modal-title" id="tambahPegawaiLabel">Tambah Pegawai Baru</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST">
        <div class="modal-body">
            <div class="mb-3">
                <label for="nama" class="form-label">NIK</label>
                <input type="text" class="form-control border-orange" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="nik" class="form-label">Nama</label>
                <input type="text" class="form-control border-orange" id="nik" name="nik" required>
            </div>
            <div class="mb-3">
                <label for="departemen" class="form-label">Jabatan</label>
                <input type="text" class="form-control border-orange" id="departemen" name="departemen" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn" style="background-color:#ff6600;color:#fff;">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Input Pajak Perusahaan Baru -->
<div class="modal fade" id="inputPajakModal" tabindex="-1" aria-labelledby="inputPajakLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color:#ff6600;color:#fff;">
        <h5 class="modal-title" id="inputPajakLabel">Input Pajak Perusahaan Baru</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST">
        <div class="modal-body">
            <div class="mb-3">
                <label for="nik" class="form-label">NIK</label>
                <input type="text" class="form-control border-orange" id="nik" name="nik" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control border-orange" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="pajak" class="form-label">Pajak</label>
                <select class="form-select select2 border-orange" id="pajak" name="pajak" required style="width: 100%;">
                    <option value="">Pilih atau ketik jenis pajak...</option>
                    <option value="PPh 21">PPh 21</option>
                    <option value="PPh 22">PPh 22</option>
                    <option value="PPh 23">PPh 23</option>
                    <option value="PPh 25">PPh 25</option>
                    <option value="PPN">PPN (Pajak Pertambahan Nilai)</option>
                    <option value="PPnBM">PPnBM (Pajak Penjualan atas Barang Mewah)</option>
                    <option value="PBB">PBB (Pajak Bumi dan Bangunan)</option>
                    <option value="Pajak Penghasilan Badan">Pajak Penghasilan Badan</option>
                    <option value="Pajak Penghasilan Final">Pajak Penghasilan Final</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="iuran" class="form-label">Iuran Pajak</label>
                <input type="number" class="form-control border-orange" id="iuran" name="iuran" required>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn" style="background-color:#ff6600;color:#fff;">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<!-- Inisialisasi Select2 -->
<script>
$(document).ready(function() {
    $('.select2').select2({
        dropdownParent: $('#inputPajakModal'),
        placeholder: "Pilih atau ketik jenis pajak...",
        allowClear: true,
        width: 'resolve'
    });
});
</script>

<!-- Style Border Input -->
<style>
.border-orange:focus {
    border-color: #ff6600 !important;
    box-shadow: 0 0 4px #ff6600 !important;
}
</style>
@endsection
