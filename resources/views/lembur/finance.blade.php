@extends('layout')

@section('title', 'Lemburan')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-orange">
        <i class="bi bi-clock-history"></i> Lemburan
    </h2>

    <!-- Filter Status -->
    <div class="d-flex justify-content-end mb-3">
        <select class="form-select w-auto">
            <option selected>Status: Semua</option>
            <option>Menunggu</option>
            <option>Disetujui</option>
            <option>Ditolak</option>
        </select>
    </div>

    <!-- Tabel Pengajuan -->
    <div class="card shadow-sm border-0">
        <div class="card-header bg-orange text-white fw-bold">
            Pengajuan Lemburan
        </div>
        <div class="card-body">
            <table class="table table-bordered text-center align-middle">
                <thead class="bg-orange text-white">
                    <tr>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Tanggal Lembur</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Durasi</th>
                        <th>Jenis Hari</th>
                        <th>Deskripsi Pekerjaan</th>
                        <th>Alasan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Andi Saputra</td>
                        <td>Staff Keuangan</td>
                        <td>25-09-2025</td>
                        <td>18:00</td>
                        <td>21:00</td>
                        <td>3 Jam</td>
                        <td>Hari Kerja</td>
                        <td>Menyelesaikan laporan bulanan</td>
                        <td>Deadline mendesak</td>
                        <td>
                            <span class="badge bg-success">Disetujui</span>
                        </td>
                        <td>
                            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#bayarModal">
                                <i class="bi bi-cash-coin"></i> Bayar
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Bayar -->
<div class="modal fade" id="bayarModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-orange text-white">
                <h5 class="modal-title">Upload Bukti Pembayaran</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama Karyawan</label>
                        <input type="text" class="form-control" value="Andi Saputra" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tanggal Bayar</label>
                        <input type="text" class="form-control" value="25-09-2025" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nominal Dibayar</label>
                        <input type="text" class="form-control" value="Rp 500.000" readonly>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Upload Bukti</label>
                        <input type="file" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success w-100">
                        Simpan & Masuk History
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

@push('styles')
<style>
    .text-orange { color: #FF7F50 !important; }
    .bg-orange { background-color: #FF7F50 !important; color: white; }
    .btn-orange { background-color: #FF7F50; color: white; border: 1px solid #FF7F50; }
    .btn-orange:hover { background-color: #e76b3c; border-color: #e76b3c; color: white; }
</style>
@endpush
@endsection
