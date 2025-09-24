@extends('layout')

@section('title', 'Dashboard')

@section('content')
  <!-- Card Orange di atas -->
<div class="container-dashboard">
    <div class="card rounded-0 border-0 mb-4" style="background-color:#f97316; color:white;">
      <div class="card-body d-flex align-items-center">
        <i class="bi bi-house-door me-2"></i>
        <h5 class="mb-0 fw-bold">Beranda</h5>
      </div>
    </div>

    <!-- Card Putih isi statistik -->
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card-stat">
          <i class="bi bi-people"></i>
          <h5>Total Karyawan</h5>
          <p class="mb-0">120 Orang</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-stat">
          <i class="bi bi-calendar-check"></i>
          <h5>Hari Kerja Bulan Ini</h5>
          <p class="mb-0">20 Hari</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card-stat">
          <i class="bi bi-clock-history"></i>
          <h5>Total Lembur</h5>
          <p class="mb-0">43 Jam</p>
        </div>
      </div>
    </div>
  </div>
  
@endsection
