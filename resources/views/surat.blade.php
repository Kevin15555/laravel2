@extends('layout')

@section('title', 'Surat')

@section('content')
<style>
  /* Header tabel oranye */
  .table thead {
    background-color: #f36f21;
    color: white;
  }

  /* Hover row oranye muda */
  .table-hover tbody tr:hover {
    background-color: #fff3e5;
  }

  /* Badge status */
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

  /* Card box */
  .card-box {
    padding: 2rem;
    border-radius: 1.5rem;
    background-color: #ffffff;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
  }

  /* Judul card */
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
          <th>Jenis Surat</th>
          <th>Nomor Surat</th>
          <th>Perihal</th>
          <th>Tanggal</th>
          <th>Status</th>
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
@endsection
