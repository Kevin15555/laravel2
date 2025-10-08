@extends('layout')

@section('title', 'Akomodasi')

@section('content')
<style>
  .badge-selesai { background-color: #28a745; color: white; }
  .badge-menunggu { background-color: #ffc107; color: #212529; }
  .badge-dipesan { background-color: #0d6efd; color: white; }

  .card-custom {
    border: none;
    border-radius: 1rem;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.05);
    padding: 2rem;
    background-color: #ffffff;
  }

  .table thead {
    background-color: #f36f21;
    color: white;
  }

  .table-hover tbody tr:hover {
    background-color: #fff3e5;
  }

  .text-orange { color: #f36f21; }
</style>

<div class="container py-4">
  <div class="card card-custom">
    <h3 class="text-orange mb-4"><i class="bi bi-geo-alt me-2"></i>Daftar Akomodasi</h3>
    <p>Berikut ini daftar akomodasi</p>

    <div class="table-responsive mt-3">
      <table class="table table-bordered table-hover align-middle">
        <thead class="text-center">
          <tr>
            <th>Nama</th>
            <th>Jadwal Kegiatan</th>
            <th>Transportasi</th>
            <th>Akomodasi Yang Dipesan</th>
            <th>Kontak PIC</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody class="text-center">
          <tr>  
            <td colspan="6" class="text-muted">Belum ada data akomodasi.</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
