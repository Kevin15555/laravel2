@extends('layout')
@php($noSidebar = true)

@section('title', 'form') 
@section('content')
<div class="container py-5">
  <div class="mx-auto" style="max-width: 850px;">
    <div class="card border-0 shadow-lg rounded-4 p-4">
      <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 fw-semibold text-dark">
          <i class="bi bi-calendar2-check-fill me-2 text-warning"></i>
          Koreksi Absensi Manual
        </h4>
        <a href="{{ route('absensi') }}" class="btn btn-outline-secondary rounded-pill px-3 shadow-sm">
          <i class="bi bi-arrow-left-circle-fill me-1"></i> Kembali
        </a>
      </div>

      <form action="#" method="POST">
        @csrf
        <div class="row g-4">
          <div class="col-md-6">
            <label for="nama" class="form-label">Nama Karyawan</label>
            <input type="text" class="form-control form-control-lg shadow-sm" id="nama" name="nama" required>
          </div>
          <div class="col-md-6">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control form-control-lg shadow-sm" id="tanggal" name="tanggal" required>
          </div>
        </div>

        <div class="row g-4 mt-1">
          <div class="col-md-6">
            <label for="waktu_masuk" class="form-label">Waktu Masuk (Tap In)</label>
            <input type="time" class="form-control form-control-lg shadow-sm" id="waktu_masuk" name="waktu_masuk">
          </div>
          <div class="col-md-6">
            <label for="waktu_pulang" class="form-label">Waktu Pulang (Tap Out)</label>
            <input type="time" class="form-control form-control-lg shadow-sm" id="waktu_pulang" name="waktu_pulang">
          </div>
        </div>

        <div class="mt-4">
          <label for="keterangan" class="form-label">Keterangan</label>
          <textarea class="form-control form-control-lg shadow-sm" id="keterangan" name="keterangan" rows="4"
            placeholder="Contoh: Lupa tap in karena tugas luar kota..."></textarea>
        </div>

        <div class="text-end mt-4">
          <button type="submit" class="btn btn-warning px-4 py-2 rounded-pill text-white shadow-sm">
            <i class="bi bi-send-check me-1"></i> Simpan Koreksi
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<style>
  .form-label {
    font-weight: 600;
    font-size: 14px;
  }

  .form-control::placeholder {
    color: #aaa;
  }

  textarea {
    resize: vertical;
  }

  .text-dark {
    color: #2c3e50;
  }

  body {
    background-color: #f4f6f9;
  }
</style>
@endsection
