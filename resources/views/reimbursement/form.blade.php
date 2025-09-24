@extends('layout')

@section('title', 'Form Pengajuan Reimbursement')

@section('content')
<div class="container py-4" style="max-width: 750px;">
  <div class="card shadow border-0 rounded-4">
    <div class="card-body">

      <h5 class="fw-bold text-warning mb-4">Form Pengajuan Reimbursement</h5>

      <form>
        <div class="mb-3">
          <label class="form-label">Nama Lengkap</label>
          <input type="text" class="form-control" placeholder="Masukkan nama">
        </div>

        <div class="mb-3">
          <label class="form-label">Nomor Pengembalian</label>
          <input type="text" class="form-control" placeholder="Masukkan departemen">
        </div>

        <div class="mb-3">
          <label class="form-label">Tanggal Pemakaian</label>
          <input type="date" class="form-control">
        </div>

        <div class="mb-3">
          <label class="form-label">Bank Account</label>
          <input type="number" class="form-control" placeholder="Contoh: 150000">
        </div>

        <div class="mb-3">
          <label class="form-label">Detail Pengajuan</label>
          <textarea class="form-control" rows="3" placeholder="Contoh: Ganti biaya pembelian ATK"></textarea>
        </div>

        <div class="d-flex justify-content-between">
          <a href="{{ route('reimbursement.index') }}" class="btn btn-secondary">Kembali</a>
          <button type="submit" class="btn btn-warning text-white">Kirim Pengajuan</button>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
