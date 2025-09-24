@extends('layout')
@php($noSidebar = true)

@section('title', 'Edit Absensi')

@section('content')
<style>
  body {
    background-color: #fdfdfd;
  }

  .card-edit {
    background: white;
    border: none;
    border-radius: 20px;
    padding: 2rem;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.08);
  }

  .form-title {
    font-size: 1.8rem;
    font-weight: 600;
    color: #f36f21;
  }

  .form-label {
    font-weight: 500;
    color: #333;
  }

  .btn-orange {
    background-color: #f36f21;
    color: white;
    border: none;
    transition: 0.3s ease;
  }

  .btn-orange:hover {
    background-color: #d85c17;
    color: white;
  }

  .btn-outline-secondary:hover {
    background-color: #f8f9fa;
  }

  .form-control,
  textarea {
    border-radius: 10px;
    padding: 0.75rem 1rem;
    font-size: 1rem;
    box-shadow: none !important;
  }

  textarea {
    resize: none;
  }

  .btn-back {
    font-size: 0.95rem;
    padding: 8px 20px;
    border-radius: 50px;
  }
</style>

<div class="container py-5">
  <div class="mx-auto" style="max-width: 750px;">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <div class="form-title d-flex align-items-center">
        <i class="bi bi-pencil-square me-2"></i> Edit Absensi
      </div>
      <a href="{{ route('absensi') }}" class="btn btn-outline-secondary btn-back">
        <i class="bi bi-arrow-left"></i> Kembali
      </a>
    </div>

    <div class="card-edit">
      <form action="#" method="POST">
        @csrf

        <div class="mb-3">
          <label for="nama" class="form-label">Nama Karyawan</label>
          <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama" readonly>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" class="form-control">
          </div>
          <div class="col-md-6 mb-3">
            <label for="waktu_masuk" class="form-label">Waktu Masuk (Tap In)</label>
            <input type="time" id="waktu_masuk" name="waktu_masuk" class="form-control">
          </div>
          <div class="col-md-6 mb-3">
            <label for="waktu_pulang" class="form-label">Waktu Pulang (Tap Out)</label>
            <input type="time" id="waktu_pulang" name="waktu_pulang" class="form-control">
          </div>
        </div>

        <div class="mb-4">
          <label for="keterangan" class="form-label">Keterangan</label>
          <textarea id="keterangan" name="keterangan" rows="4" class="form-control" placeholder="Tulis keterangan tambahan..."></textarea>
        </div>

        <div class="text-end">
          <button type="submit" class="btn btn-orange px-4 py-2 rounded-pill">
            <i class="bi bi-save2 me-1"></i> Simpan Perubahan
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
