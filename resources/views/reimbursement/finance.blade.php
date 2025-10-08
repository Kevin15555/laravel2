@extends('layout')

@section('title', 'Reimbursement')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="mb-0 fw-bold text-orange">Daftar Pengajuan Reimbursement</h4>
    </div>

    <div class="d-flex justify-content-end mb-2">
        <select class="form-select w-auto">
            <option selected>Status: Semua</option>
            <option>Menunggu</option>
            <option>Disetujui</option>
            <option>Ditolak</option>
        </select>
    </div>

    <div class="card border-0 shadow-sm rounded-4">
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="text-white text-center">
                    <tr>
                        <th class="bg-orange">No</th>
                        <th class="bg-orange">Nama</th>
                        <th class="bg-orange">Jabatan</th>
                        <th class="bg-orange">Nomor Pengembalian</th>
                        <th class="bg-orange">Tanggal Pemakaian</th>
                        <th class="bg-orange">Bank Account</th>
                        <th class="bg-orange">Detail dan Bukti Pengajuan</th>
                        <th class="bg-orange">Status</th>
                        <th class="bg-orange">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td>1</td>
                        <td>Budi</td>
                        <td>Staff</td>
                        <td>RBM-001</td>
                        <td>2025-09-26</td>
                        <td>BCA</td>
                        <td>Transportasi Dinas</td>
                        <td><span class="badge bg-success">Telah Disetujui</span></td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#modalVerifikasi">
                                <i class="bi bi-check2-square"></i> Verifikasi
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- Modal Verifikasi --}}
<div class="modal fade" id="modalVerifikasi" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-3">
      <div class="modal-header bg-orange text-white">
        <h5 class="modal-title">Verifikasi Reimbursement</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Nomor Pengembalian</label>
            <input type="text" class="form-control" value="RBM-001" readonly>
          </div>
          <div class="mb-3">
            <label class="form-label">Tanggal Transfer</label>
            <input type="date" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Upload Bukti Transfer</label>
            <input type="file" class="form-control">
          </div>
          <div class="mb-3">
            <label class="form-label">Catatan</label>
            <textarea class="form-control" rows="3" placeholder="Tambahkan catatan..."></textarea>
          </div>
          <button type="submit" class="btn btn-success w-100">Simpan Verifikasi</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@push('styles')
<style>
.bg-orange { background-color: #f97316 !important; }
.text-orange { color: #f97316 !important; }
.card { border-radius: 10px; }
</style>
@endpush
