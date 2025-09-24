@extends('layout')
@section('title', 'Akun IOTA')

@section('content')
<style>
  .text-orange { color: #f36f21; }
  .btn-orange {
    background-color: #f36f21;
    color: white;
    border: none;
  }
  .btn-orange:hover {
    background-color: #d85c17;
    color: white;
  }
  .table thead { background-color: #f36f21; color: white; }
  .table-hover tbody tr:hover { background-color: #fff3e5; }
  .card-custom {
    border: none;
    border-radius: 1.5rem;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.05);
    padding: 2rem;
    background-color: #ffffff;
  }
</style>

<div class="container py-4">
  <div class="card card-custom">
    <h3 class="text-orange mb-4">
      <i class="bi bi-people-fill me-2"></i> Manajemen Akun IOTA
    </h3>

    <div class="d-flex">
      <!-- Tabel -->
      <div class="flex-grow-1 me-3">
        <div class="mb-3">
          <input type="text" class="form-control form-control-lg rounded-pill px-4" placeholder="Cari nama atau email...">
        </div>

        <div class="table-responsive">
          <table class="table table-bordered table-hover align-middle">
            <thead>
              <tr class="text-center">
                <th>Nama</th>
                <th>Email</th>
                <th>Username</th>
                <th>Role</th>
                <th>Terakhir Login</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody class="text-center">
              <tr>
                <td colspan="7" class="text-muted">Belum ada data akun.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <!-- Tombol Buat Akun di samping -->
      <div class="d-flex flex-column align-items-start">
        <a href="{{ route('buat-akun') }}" class="btn btn-orange rounded-pill mb-3">
          <i class="bi bi-plus-circle me-1"></i> Buat Akun
        </a>
      </div>
    </div>
  </div>
</div>
@endsection
