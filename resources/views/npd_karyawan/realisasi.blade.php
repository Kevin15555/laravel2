@extends('layout')

@section('title', 'Ajukan Realisasi - NPD Karyawan')

@section('content')
<div class="container mt-4">
    <h4 class="mb-3 fw-semibold text-orange">Ajukan Realisasi Biaya</h4>

    <div class="card shadow-sm rounded-3">
        <div class="card-body">
            <form action="/npd_karyawan/realisasi/store" method="POST" enctype="multipart/form-data">
                @csrf

                {{-- Info singkat pengajuan --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Tujuan Perjalanan</label>
                    <input type="text" class="form-control" value="Jakarta" readonly>
                </div>
                <div class="mb-3">
                    <label class="form-label fw-semibold">Tanggal</label>
                    <input type="text" class="form-control" value="21/08/2025" readonly>
                </div>

                {{-- Input Realisasi --}}
                <div class="mb-3">
                    <label class="form-label fw-semibold">Realisasi Biaya (Rp)</label>
                    <input type="number" class="form-control" name="realisasi" placeholder="Masukkan total realisasi" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Upload Bukti</label>
                    <input type="file" class="form-control" name="bukti" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Catatan</label>
                    <textarea class="form-control" name="catatan" rows="3" placeholder="Catatan tambahan..."></textarea>
                </div>

                {{-- Tombol --}}
                <div class="d-flex justify-content-between">
                    <a href="/npd_karyawan/draft" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-orange">
                        <i class="bi bi-send"></i> Ajukan Realisasi
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- Bootstrap Icons --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

{{-- Custom Style Oranye --}}
<style>
    .btn-orange {
        background-color: #ff7f32;
        border: none;
        color: white;
    }
    .btn-orange:hover {
        background-color: #e66a1f;
        color: white;
    }
    .text-orange { color: #ff7f32; }
</style>
@endsection
