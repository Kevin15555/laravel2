@extends('layout')

@section('title', 'Out Day - Atasan')

@section('content')
<style>
  .card-header-orange {
    background-color: #f36f21;
    color: white;
    font-weight: 600;
    border-radius: 1rem 1rem 0 0;
    padding: 1rem 1.5rem;
  }
  .btn-orange {
    background-color: #f36f21;
    color: white;
    border: none;
  }
  .btn-orange:hover {
    background-color: #d85c17;
    color: white;
  }
  .table thead {
    background-color: #f36f21;
    color: white;
  }
  .table-hover tbody tr:hover {
    background-color: #fff3e5;
  }
  .badge-menunggu {
    background-color: #ffc107;
    color: #212529;
  }
</style>

<div class="container-fluid py-4">
  <div class="card shadow border-0 rounded-4">
    <div class="card-header-orange">
      <i class="bi bi-clock me-2"></i> Out Day - Atasan
    </div>
    <div class="card-body p-4">
      <p class="text-muted">Belum ada pengajuan Out Day dari karyawan.</p>

      <div class="table-responsive mt-3">
        <table class="table table-bordered table-hover align-middle">
          <thead class="text-center">
            <tr>
              <th>Nama</th>
              <th>Tanggal</th>
              <th>Jam Keluar</th>
              <th>Alasan</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="text-center">
            <tr>
              <td colspan="6" class="text-muted">Belum ada data.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
