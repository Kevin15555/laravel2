@extends('layout')

@section('title', 'Petty Cash')

@section('content')
<div class="container mt-4">
    <h3 class="mb-4 text-orange"><i class="bi bi-cash-stack"></i> Petty Cash</h3>

    <div class="card shadow-sm border-0">
        <div class="card-header d-flex justify-content-between align-items-center bg-orange text-white fw-bold">
            Daftar Petty Cash
            <div>
                <button class="btn btn-success btn-sm fw-bold" data-bs-toggle="modal" data-bs-target="#modalSaldo">
                    <i class="bi bi-wallet2"></i> Isi Saldo
                </button>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-hover table-bordered align-middle">
                <thead class="bg-orange text-white text-center">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Jumlah</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Budi</td>
                        <td>Pembelian ATK</td>
                        <td>Rp 250.000</td>
                        <td><span class="badge bg-secondary">Menunggu</span></td>
                        <td class="text-center">
                            <button class="btn btn-success btn-sm me-1">
                                <i class="bi bi-check-circle"></i> Setuju
                            </button>
                            <button class="btn btn-danger btn-sm">
                                <i class="bi bi-x-circle"></i> Tolak
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Isi Saldo -->
<div class="modal fade" id="modalSaldo" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success text-white">
        <h5 class="modal-title">Isi Saldo Petty Cash</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <form>
        <div class="modal-body">
          <div class="mb-3">
            <label class="form-label">Nominal Pengisian</label>
            <input type="number" class="form-control" placeholder="Contoh: 1000000">
          </div>
          <div class="mb-3">
            <label class="form-label">Keterangan</label>
            <input type="text" class="form-control" placeholder="Contoh: Top Up Saldo Awal Bulan">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

@push('styles')
<style>
.text-orange { color: #f36f21 !important; }
.bg-orange { background-color: #f36f21 !important; color: white; }

/* Hover row oranye muda */
.table-hover tbody tr:hover {
    background-color: #fff3e5;
}
</style>
@endpush
@endsection
