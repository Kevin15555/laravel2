@extends('layout')

@section('title', 'Dinas Perjalanan - Atasan')

@section('content')
<style>
  .btn-orange { background-color: #f36f21; color: white; border: none; }
  .btn-orange:hover { background-color: #d85c17; color: white; }
  .text-orange { color: #f36f21; }
</style>

<div class="container-fluid">
  <h4 class="fw-bold text-orange mb-4"><i class="bi bi-check2-square me-2"></i>Approval Atasan</h4>

  <div class="card shadow-sm rounded-4 border-0">
    <div class="card-body">
      <h6 class="fw-bold mb-3">Pengajuan Menunggu Persetujuan</h6>
      <div class="table-responsive">
        <table class="table table-bordered align-middle">
          <thead class="table-light">
            <tr>
              <th>No</th>
              <th>Karyawan</th>
              <th>Tanggal</th>
              <th>Tujuan</th>
              <th>Keperluan</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Budi Santoso</td>
              <td>12-08-2025 s/d 14-08-2025</td>
              <td>Jakarta Pusat</td>
              <td>Rapat bersama klien</td>
              <td>
                <button class="btn btn-success btn-sm rounded-pill"><i class="bi bi-check2"></i> Setujui</button>
                <button class="btn btn-danger btn-sm rounded-pill"><i class="bi bi-x-circle"></i> Tolak</button>
              </td>
            </tr>
            <tr>
              <td colspan="6" class="text-center text-muted">Tidak ada pengajuan menunggu</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
