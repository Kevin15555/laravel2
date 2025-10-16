@extends('layout')

@section('title', 'Out Day')

@section('content')
<style>
  .bg-orange {
    background-color: #ff6600 !important;
  }
  .text-orange {
    color: #ff6600 !important;
  }
  .btn-approve {
    background-color: #28a745;
    color: #fff;
    border: none;
  }
  .btn-approve:hover {
    background-color: #218838;
    color: #fff;
  }
  .btn-reject {
    background-color: #dc3545;
    color: #fff;
    border: none;
  }
  .btn-reject:hover {
    background-color: #b52a37;
    color: #fff;
  }
</style>

<div class="container py-4">
  <h4 class="mb-3 text-orange fw-bold">Out Day</h4>

  <!-- Filter -->
  <div class="d-flex justify-content-end mb-3">
    <select class="form-select w-auto">
      <option selected>Status: Semua</option>
      <option>Menunggu</option>
      <option>Disetujui</option>
      <option>Ditolak</option>
    </select>
  </div>

  <!-- Tabel -->
  <div class="card shadow-sm border-0">
    <div class="card-header bg-orange text-white fw-bold text-center">
      Pengajuan Out Day Karyawan
    </div>
    <div class="card-body p-0">
      <table class="table table-bordered mb-0 align-middle text-center">
        <thead class="table-light">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Jabatan</th>
            <th>Jenis Izin</th>
            <th>Tanggal Pengajuan</th>
            <th>Tanggal Izin</th>
            <th>Alasan</th>
            <th>Lampiran</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Andi</td>
            <td>123456</td>
            <td>Karyawan</td>
            <td>Izin</td>
            <td>2025-09-26</td>
            <td>2025-09-28</td>
            <td>Keperluan keluarga</td>
            <td>-</td>
            <td><span class="badge bg-warning text-dark">Menunggu</span></td>
            <td>
              <button class="btn btn-approve btn-sm me-1">
                <i class="bi bi-check-circle"></i> Setuju
              </button>
              <button class="btn btn-reject btn-sm">
                <i class="bi bi-x-circle"></i> Tolak
              </button>
            </td>
          </tr>
          <tr>
            <td colspan="11" class="text-muted">Belum ada data lain.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
