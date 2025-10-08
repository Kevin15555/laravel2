@extends('layout')

@section('title', 'Karyawan')

@section('content')
<div class="card shadow-sm p-4 rounded-4 border-0" style="background: linear-gradient(135deg, #fff3e6, #fffaf5);">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0 fw-bold text-orange">📋 Data Karyawan</h4>
    <button class="btn btn-orange fw-semibold" data-bs-toggle="modal" data-bs-target="#tambahKaryawan">
      ➕ Tambah Karyawan
    </button>
  </div>

  <!-- Karyawan Direksi -->
  <h5 class="fw-bold text-orange mb-3">Karyawan Direksi</h5>
  <div class="table-responsive mb-4">
    <table class="table table-bordered table-striped align-middle shadow-sm rounded-3 overflow-hidden">
      <thead class="table-header text-center">
        <tr>
          <th style="width: 60px;">No</th>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="4" class="text-center text-muted">Belum ada data</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Karyawan Tetap -->
  <h5 class="fw-bold text-orange mb-3">Karyawan Tetap</h5>
  <div class="table-responsive mb-4">
    <table class="table table-bordered table-striped align-middle shadow-sm rounded-3 overflow-hidden">
      <thead class="table-header text-center">
        <tr>
          <th style="width: 60px;">No</th>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="4" class="text-center text-muted">Belum ada data</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Karyawan Kontrak -->
  <h5 class="fw-bold text-orange mb-3">Karyawan Kontrak</h5>
  <div class="table-responsive mb-4">
    <table class="table table-bordered table-striped align-middle shadow-sm rounded-3 overflow-hidden">
      <thead class="table-header text-center">
        <tr>
          <th style="width: 60px;">No</th>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="4" class="text-center text-muted">Belum ada data</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Karyawan Magang & PKL -->
  <h5 class="fw-bold text-orange mb-3">Karyawan Magang & PKL</h5>
  <div class="table-responsive">
    <table class="table table-bordered table-striped align-middle shadow-sm rounded-3 overflow-hidden">
      <thead class="table-header text-center">
        <tr>
          <th style="width: 60px;">No</th>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="4" class="text-center text-muted">Belum ada data</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<!-- Modal Tambah Karyawan -->
<div class="modal fade" id="tambahKaryawan" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fw-bold text-orange">➕ Tambah Karyawan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="fw-semibold">Nama</label>
            <input type="text" class="form-control" placeholder="Masukkan Nama">
          </div>
          <div class="mb-3">
            <label class="fw-semibold">Jabatan</label>
            <input type="text" class="form-control" placeholder="Masukkan Jabatan">
          </div>
          <div class="mb-3">
            <label class="fw-semibold">Email</label>
            <input type="email" class="form-control" placeholder="Masukkan Email">
          </div>
          <div class="mb-3">
            <label class="fw-semibold">Jenis Karyawan</label>
            <select class="form-select">
              <option selected>Pilih Jenis</option>
              <option>Direksi</option>
              <option>Tetap</option>
              <option>Kontrak</option>
              <option>Magang / PKL</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
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
  .table-header {
    background-color: #ffd9b3;
    font-weight: 600;
  }
  table {
    border-radius: 10px;
    overflow: hidden;
  }
</style>
@endpush
