@extends('layout')

@section('title', 'Slip Gaji - Finance')

@section('content')
<div class="container mt-4">
    <h4 style="color:#ff6600;" class="fw-bold mb-3">Slip Gaji Karyawan</h4>

    <!-- Tombol buat input & upload -->
    <div class="mb-3">
        <button class="btn" style="background-color:#ff6600;color:#fff;font-weight:500;" 
                data-bs-toggle="modal" data-bs-target="#inputSlipModal">
            + Input & Upload Bukti
        </button>
    </div>

    <!-- Tabel Slip Gaji -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead style="background-color:#ff6600;color:#fff;">
                    <tr>
                        <th>No</th>
                        <th>Keterangan</th>
                        <th>Pendapatan (Rp)</th>
                        <th>Pengurangan (Rp)</th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                    <tr><td>1</td><td>Gaji Pokok</td><td>5.000.000</td><td>-</td></tr>
                    <tr><td>2</td><td>Tunjangan</td><td>42.000</td><td>-</td></tr>
                    <tr><td>3</td><td>Lembur</td><td>-</td><td>-</td></tr>
                    <tr><td>4</td><td>Transport & Makan</td><td>-</td><td>-</td></tr>
                    <tr><td>5</td><td>Tunjangan Hari Raya</td><td>5.000.000</td><td>-</td></tr>
                    <tr><td>6</td><td>BPJS Kesehatan</td><td>-</td><td>50.674</td></tr>
                    <tr><td>7</td><td>JHT</td><td>-</td><td>100.000</td></tr>
                    <tr><td>8</td><td>Jaminan Pensiun</td><td>-</td><td>50.000</td></tr>
                    <tr><td>9</td><td>PPH 21</td><td>-</td><td>200.840</td></tr>
                    <tr class="fw-bold table-light">
                        <td colspan="2">TOTAL</td>
                        <td>10.042.000</td>
                        <td>401.514</td>
                    </tr>
                    <tr class="fw-bold table-warning">
                        <td colspan="2">THP (Take Home Pay)</td>
                        <td colspan="2" style="text-align:right; color:#ff6600;">9.640.486</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Input & Upload -->
<div class="modal fade" id="inputSlipModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content rounded-3 shadow">
      <div class="modal-header" style="background-color:#ff6600;color:#fff;">
        <h5 class="modal-title">Input Slip Gaji & Upload Bukti</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">ID</label>
            <input type="text" class="form-control" placeholder="Masukkan ID">
          </div>

             <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" placeholder="Masukkan nama karyawan">
          </div>

             <div class="mb-3">
            <label class="form-label">Jabatan</label>
            <input type="text" class="form-control" placeholder="Masukkan Jabatan">
          </div>

          <div class="mb-3">
            <label class="form-label">Periode</label>
            <input type="month" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Upload Bukti Perhitungan</label>
            <input type="file" class="form-control" accept=".pdf,.jpg,.png">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="button" class="btn" style="background-color:#ff6600;color:#fff;">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
