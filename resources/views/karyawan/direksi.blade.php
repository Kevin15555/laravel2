@extends('layout')

@section('title', 'Karyawan - Direksi')

@section('content')
<div class="card shadow-sm p-4 rounded-4 border-0" style="background: linear-gradient(135deg, #fff3e6, #fffaf5);">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="mb-0 fw-bold" style="color: #e65c00;">📋 Data Direksi</h4>
    <!-- Tombol Buat Akun sudah dihapus -->
  </div>

  <div class="table-responsive">
    <table class="table table-hover table-bordered align-middle shadow-sm rounded-3 overflow-hidden">
      <thead style="background-color: #ffd9b3;" class="text-dark text-center">
        <tr>
          <th style="width: 50px;">No</th>
          <th>Nama</th>
          <th>Jabatan</th>
          <th>Email</th>
        </tr>
      </thead>
      <tbody class="bg-white">
        <!-- Tambah data lainnya -->
      </tbody>
    </table>
  </div>
</div>
@endsection
