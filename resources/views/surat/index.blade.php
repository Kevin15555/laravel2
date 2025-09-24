@extends('layout')

@section('title', 'Surat')

@section('content')
<style>
  .table thead {
    background-color: #f36f21;
    color: white;
  }
  .table-hover tbody tr:hover {
    background-color: #fff3e5;
  }
  .badge-success {
    background-color: #28a745;
    color: white;
  }
  .badge-primary {
    background-color: #007bff;
    color: white;
  }
  .badge-warning {
    background-color: #ffc107;
    color: #212529;
  }
  .card-box {
    padding: 2rem;
    border-radius: 1.5rem;
    background-color: #ffffff;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
  }
  .card-box h4 {
    color: #f36f21;
    font-weight: 600;
  }
</style>

<div class="card-box">
  <h4>Daftar Surat Masuk / Keluar</h4>
  <div class="table-responsive mt-3">
    <table class="table table-bordered table-hover align-middle">
      <thead class="text-center">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIK</th>
          <th>Jabatan</th>
          <th>Tanggal Pengajuan</th>
          <th>Jam Pertemuan</th>
          <th>Bertemu Dengan</th>
          <th>Perusahaan</th>
          <th>Bersama Dengan</th>
          <th>Tujuan</th>
          <th>Detail Tujuan</th>
        </tr>
      </thead>
      <tbody class="text-center">
        <tr>
          <td colspan="11" class="text-muted">Belum ada data.</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
