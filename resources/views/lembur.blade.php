@extends('layout')

@section('title', 'Lembur - Pilih Role')

@section('content')
<style>
  .role-card {
    transition: 0.3s ease;
    border-radius: 12px;
    border: 1px solid #f3c69e;
    box-shadow: 0 0 12px rgba(0,0,0,0.05);
    cursor: pointer;
    background-color: #fffaf3;
  }
  .role-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 4px 14px rgba(0,0,0,0.1);
  }
  .role-icon {
    font-size: 32px;
    color: #f36f21;
  }
</style>

<div class="container py-4">
  <h3 class="mb-4">Pilih Role Lembur</h3>
  <div class="row g-4">
    <div class="col-md-3">
      <a href="{{ route('lembur.role', ['role' => 'karyawan']) }}" class="text-decoration-none text-dark">
        <div class="p-4 text-center role-card">
          <div class="role-icon mb-2"><i class="fas fa-user"></i></div>
          <h6 class="m-0">Karyawan</h6>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{ route('lembur.role', ['role' => 'atasan']) }}" class="text-decoration-none text-dark">
        <div class="p-4 text-center role-card">
          <div class="role-icon mb-2"><i class="fas fa-user-tie"></i></div>
          <h6 class="m-0">Atasan</h6>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{ route('lembur.role', ['role' => 'hrd']) }}" class="text-decoration-none text-dark">
        <div class="p-4 text-center role-card">
          <div class="role-icon mb-2"><i class="fas fa-users"></i></div>
          <h6 class="m-0">HRD</h6>
        </div>
      </a>
    </div>
    <div class="col-md-3">
      <a href="{{ route('lembur.role', ['role' => 'keuangan']) }}" class="text-decoration-none text-dark">
        <div class="p-4 text-center role-card">
          <div class="role-icon mb-2"><i class="fas fa-coins"></i></div>
          <h6 class="m-0">Keuangan</h6>
        </div>
      </a>
    </div>
  </div>
</div>
@endsection
