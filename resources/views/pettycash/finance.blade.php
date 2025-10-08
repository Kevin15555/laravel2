@extends('layout')

@section('title', 'Petty Cash')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4 text-orange"><i class="bi bi-cash-stack"></i> Petty Cash</h3>

    <div class="card shadow-sm border-0">
        <div class="card-header d-flex justify-content-between align-items-center bg-orange text-white fw-bold">
            Daftar Petty Cash
            <button class="btn btn-light btn-sm text-orange fw-bold" data-bs-toggle="modal" data-bs-target="#modalTambah">
                <i class="bi bi-plus-circle"></i> Tambah Data
            </button>
        </div>
        <div class="card-body text-center text-muted">
            Belum ada data
        </div>
    </div>
</div>

<!-- Modal Tambah Data -->
<div class="modal fade" id="modalTambah" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-orange text-white">
        <h5 class="modal-title">Tambah Petty Cash</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" placeholder="Nama pengajuan">
          </div>
          <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <input type="text" class="form-control" placeholder="Keterangan">
          </div>
          <div class="mb-3">
            <label class="form-label">Jumlah</label>
            <input type="number" class="form-control" placeholder="Jumlah (Rp)">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-orange text-white">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

@push('styles')
<style>
.text-orange { color: #f36f21 !important; }
.bg-orange { background-color: #f36f21 !important; color: white; }
.btn-orange { background-color: #f36f21 !important; }

.table-hover tbody tr:hover {
    background-color: #fff3e5;
}
</style>
@endpush
@endsection
