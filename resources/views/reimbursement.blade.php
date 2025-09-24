@extends('layout')

@section('title', 'Reimbursement')

@section('content')
@php($form = request('form') === 'buat')
<style>
  .btn-orange {
    background-color: #f36f21;
    color: white;
    border: none;
  }
  .btn-orange:hover {
    background-color: #d85c17;
    color: white;
  }
  .table thead {
    background-color: #f36f21;
    color: white;
  }
  .card-header-orange {
    background-color: #f36f21;
    color: white;
    font-weight: 600;
    border-radius: 1rem 1rem 0 0;
    padding: 1rem 1.5rem;
  }
</style>

<div class="container-fluid py-4">
  @if (!$form)
    <div class="card shadow border-0 rounded-4">
      <div class="card-header-orange d-flex justify-content-between align-items-center">
        <span><i class="bi bi-receipt-cutoff me-2"></i>Reimbursement</span>
        <a href="{{ url('/reimbursement?form=buat') }}" class="btn btn-light text-orange fw-semibold rounded-pill">
          + Pengajuan Baru
        </a>
      </div>
      <div class="card-body p-4">
        <p class="text-muted">Belum ada data reimbursement.</p>
        <table class="table table-bordered table-hover rounded overflow-hidden mt-3">
          <thead>
            <tr>
              <th>No</th>
              <th>Jenis</th>
              <th>Nominal</th>
              <th>Tanggal</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="6" class="text-center text-muted">Belum ada pengajuan.</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  @else
    <div class="card shadow border-0 rounded-4">
      <div class="card-header-orange">
        <i class="bi bi-journal-plus me-2"></i>Form Pengajuan Reimbursement
      </div>
      <div class="card-body p-4">
        <form>
          <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Reimbursement</label>
            <select class="form-select form-select-lg" id="jenis">
              <option selected disabled>Pilih jenis</option>
              <option value="transport">Transportasi</option>
              <option value="akomodasi">Akomodasi</option>
              <option value="makan">Uang Makan</option>
              <option value="lainnya">Lainnya</option>
            </select>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="tanggal" class="form-label">Tanggal</label>
              <input type="date" id="tanggal" class="form-control form-control-lg">
            </div>
            <div class="col-md-6 mb-3">
              <label for="nominal" class="form-label">Nominal</label>
              <input type="number" id="nominal" class="form-control form-control-lg" placeholder="Contoh: 250000">
            </div>
          </div>
          <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea id="keterangan" rows="4" class="form-control form-control-lg" placeholder="Keterangan pengajuan..."></textarea>
          </div>
          <div class="text-end">  
            <a href="{{ url('/reimbursement') }}" class="btn btn-secondary rounded-pill px-4 me-2">Batal</a>
            <button type="submit" class="btn btn-orange rounded-pill px-4">Ajukan</button>
          </div>
        </form>
      </div>
    </div>
  @endif
</div>
@endsection
