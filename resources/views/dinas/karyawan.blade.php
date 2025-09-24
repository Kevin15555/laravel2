@extends('layout')

@section('title', 'Dinas Perjalanan - Karyawan')

@section('content')
<style>
  .btn-orange { background-color: #f36f21; color: white; border: none; }
  .btn-orange:hover { background-color: #d85c17; color: white; }
  .text-orange { color: #f36f21; }
</style>

<div class="container-fluid">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold text-orange"><i class="bi bi-briefcase me-2"></i>Dinas Perjalanan (Karyawan)</h4>
    <button class="btn btn-orange rounded-pill" data-bs-toggle="modal" data-bs-target="#ajukanModal">
      <i class="bi bi-plus-circle me-1"></i> Ajukan Perjalanan
    </button>
  </div>

  <div class="card shadow-sm rounded-4 border-0">
    <div class="card-body">
      <h6 class="fw-bold mb-3">Riwayat Pengajuan</h6>
      <div class="table-responsive">
        <table class="table table-bordered align-middle">
          <thead class="table-light">
            <tr>
              <th>No</th>
              <th>Tanggal</th>
              <th>Tujuan</th>
              <th>Keperluan</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>12-08-2025 s/d 14-08-2025</td>
              <td>Jakarta Pusat</td>
              <td>Rapat bersama klien</td>
              <td><span class="badge bg-warning">Menunggu Approval Atasan</span></td>
            </tr>
            <tr>
              <td colspan="5" class="text-center text-muted">Belum ada data lain</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- Modal Ajukan Perjalanan -->
<div class="modal fade" id="ajukanModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content rounded-4 border-0">
      <div class="modal-header text-white rounded-top-4" style="background-color: #f36f21;">
        <h5 class="modal-title"><i class="bi bi-plus-circle me-2"></i>Form Pengajuan Perjalanan</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Tanggal Mulai</label>
              <input type="date" class="form-control">
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label fw-semibold">Tanggal Selesai</label>
              <input type="date" class="form-control">
            </div>
            <div class="col-md-12 mb-3">
              <label class="form-label fw-semibold">Lokasi Tujuan</label>
              <input type="text" class="form-control" placeholder="Contoh: Jakarta Pusat">
            </div>
            <div class="col-md-12 mb-3">
              <label class="form-label fw-semibold">Keperluan</label>
              <textarea class="form-control" rows="3" placeholder="Contoh: Rapat bersama klien"></textarea>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary rounded-pill" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-orange rounded-pill">Kirim Pengajuan</button>
      </div>
    </div>
  </div>
</div>
@endsection
