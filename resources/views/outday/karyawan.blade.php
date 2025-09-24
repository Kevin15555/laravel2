@extends('layout')

@section('title', 'Out Day - Karyawan')

@section('content')
<style>
  .bg-orange {
    background-color: #ff6600 !important;
  }
  .text-orange {
    color: #ff6600 !important;
  }
</style>

<div class="container py-4">
  <h4 class="mb-3 text-orange fw-bold">Out Day Karyawan</h4>
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
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>
            <td colspan="7" class="text-muted">Belum ada data.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
