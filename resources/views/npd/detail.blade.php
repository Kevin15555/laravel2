@extends('layout')

@section('title', 'Detail NPD')

@section('content')
<style>
  .btn-orange {
    background-color: #f36f21;
    color: #fff;
  }
  .btn-orange:hover {
    background-color: #d95f1d;
    color: #fff;
  }
</style>

<div class="container mt-4">
    <h2 class="mb-4">Detail NPD</h2>

    {{-- Info Detail --}}
    <div class="card shadow-sm mb-3">
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead class="table-light">
                    <tr>
                        <th>Nama Karyawan</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Tujuan Perjalanan</th>
                        <th>Tanggal Berangkat</th>
                        <th>Tanggal Kembali</th>
                        <th>Jenis Kegiatan</th>
                        <th>Tujuan Lokasi</th>
                        <th>Transportasi</th>
                        <th>Akomodasi</th>
                        <th>Estimasi Biaya</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Budi Santoso</td>
                        <td>21/08/2025</td>
                        <td>Jakarta</td>
                        <td>25/08/2025</td>
                        <td>28/08/2025</td>
                        <td>Rapat & Presentasi</td>
                        <td>Kantor Pusat Jakarta</td>
                        <td>Pesawat</td>
                        <td>Hotel Bintang 4</td>
                        <td>Rp 5.000.000</td>
                        <td><span id="status-badge" class="badge bg-warning">Menunggu</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Tombol Aksi --}}
    <div class="mb-3">
        <button class="btn btn-orange me-2" data-bs-toggle="modal" data-bs-target="#setujuModal">
            Setuju
        </button>
        <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#tolakModal">
            Tolak
        </button>
        <a href="{{ route('npd.index') }}" class="btn btn-secondary ms-2">Kembali</a>
    </div>
</div>

{{-- Modal Setuju --}}
<div class="modal fade" id="setujuModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-orange">
      <div class="modal-header bg-orange text-white">
        <h5 class="modal-title"><i class="bi bi-check-circle-fill"></i> Konfirmasi</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center">
        <h5>Anda yakin menyetujui pengajuan ini?</h5>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="#" class="btn btn-orange btn-lg">Setuju</a>
      </div>
    </div>
  </div>
</div>

{{-- Modal Tolak --}}
<div class="modal fade" id="tolakModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content border-danger">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title"><i class="bi bi-x-circle-fill"></i> Konfirmasi</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body text-center">
        <h5>Anda yakin menolak pengajuan ini?</h5>
      </div>
      <div class="modal-footer justify-content-center">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
        <a href="#" class="btn btn-danger btn-lg">Tolak</a>
      </div>
    </div>
  </div>
</div>
@endsection
