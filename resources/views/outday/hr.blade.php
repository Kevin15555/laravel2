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
    color: white;
    border: none;
  }
  .btn-approve:hover {
    background-color: #218838;
    color: white;
  }
  .btn-reject {
    background-color: #dc3545;
    color: white;
    border: none;
  }
  .btn-reject:hover {
    background-color: #b52a37;
    color: white;
  }
</style>

<div class="container py-4">
  <h4 class="mb-3 text-orange fw-bold">Out Day</h4>
  <div class="card shadow-sm">
    <div class="card-header bg-orange text-white fw-bold">
      Rekap Out Day Karyawan
    </div>
    <div class="card-body p-0">
      <table class="table table-bordered mb-0">
        <thead class="text-center">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIK</th>
            <th>Jabatan</th>
            <th>Jenis Izin</th>
            <th>Tanggal Izin</th>
            <th>Alasan</th>
            <th>Lampiran</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td>1</td>
            <td>Andi</td>
            <td>123456</td>
            <td>Staff</td>
            <td>Out Day</td>
            <td>2025-09-26</td>
            <td>Keperluan keluarga</td>
            <td>-</td>
            <td>
              <button type="button" class="btn btn-approve btn-sm me-1">
                <i class="bi bi-check-circle"></i> Setuju
              </button>
              <button type="button" class="btn btn-reject btn-sm">
                <i class="bi bi-x-circle"></i> Tolak
              </button>
            </td>
          </tr>
          <tr>
            <td colspan="9" class="text-muted">Belum ada data lain.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
