@extends('layout')

@section('title', 'Pajak - Perusahaan')

@section('content')
<div class="container mt-4">
    <h4 class="fw-bold text-orange mb-3">
        <i class="bi bi-cash-stack"></i> Pajak - Perusahaan
    </h4>

    <!-- Tombol Input Pajak -->
    <div class="mb-3 d-flex justify-content-end">
        <button class="btn btn-orange" data-bs-toggle="modal" data-bs-target="#inputPajakModal">
       Input Form Pajak
        </button>
    </div>

    <!-- Tabel Pajak -->
    <div class="card shadow-sm border-0">
        <div class="card-body p-0">
            <table class="table table-bordered table-hover align-middle text-center mb-0">
                <thead class="bg-orange text-white">
                    <tr>
                        <th>No</th>
                        <th>Jenis Pajak</th>
                        <th>Bulan</th>
                        <th>Tahun</th>
                        <th>Nominal Iuran</th>
                        <th>Keterangan</th>
                        <th>Upload Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PPh 21</td>
                        <td>9</td>
                        <td>2025</td>
                        <td>Rp 10.000.000</td>
                        <td>Pajak karyawan bulan September</td>
                        <td><span class="badge bg-warning text-dark">Menunggu</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Input Pajak Perusahaan Baru -->
<div class="modal fade" id="inputPajakModal" tabindex="-1" aria-labelledby="inputPajakLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-orange text-white">
        <h5 class="modal-title" id="inputPajakLabel">Input Form Pajak</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="#" method="POST">
        <div class="modal-body">
          <div class="mb-3">
              <label class="form-label">Jenis Pajak</label>
              <select class="form-select select2 border-orange" required>
                  <option value="">Pilih atau ketik jenis pajak...</option>
                  <option>PPh 21</option>
                  <option>PPh 22</option>
                  <option>PPh 23</option>
                  <option>PPh 25</option>
                  <option>PPN</option>
                  <option>PPnBM</option>
                  <option>PBB</option>
                  <option>Pajak Penghasilan Badan</option>
                  <option>Pajak Penghasilan Final</option>
              </select>
          </div>

          <div class="mb-3">
              <label class="form-label">Bulan</label>
              <select class="form-select border-orange" required>
                  <option value="">Pilih Bulan...</option>
                  @for ($i = 1; $i <= 12; $i++)
                      <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
              </select>
          </div>

          <div class="mb-3">
              <label class="form-label">Tahun</label>
              <select class="form-select border-orange" required>
                  <option value="">Pilih Tahun...</option>
                  @for ($t = 2001; $t <= 2025; $t++)
                      <option value="{{ $t }}">{{ $t }}</option>
                  @endfor
              </select>
          </div>

          <div class="mb-3">
              <label class="form-label">Nominal Iuran</label>
              <input type="text" class="form-control border-orange" required>
          </div>

          <div class="mb-3">
              <label class="form-label">Keterangan (Opsional)</label>
              <input type="text" class="form-control border-orange">
          </div>

          <div class="mb-3">
              <label class="form-label">Upload Data (Opsional)</label>
              <input type="file" class="form-control border-orange">
          </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-orange">Simpan</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.select2').select2({
        dropdownParent: $('#inputPajakModal'),
        placeholder: "Pilih atau ketik jenis pajak...",
        allowClear: true
    });
});
</script>

@push('styles')
<style>
    .text-orange { color: #ff6600 !important; }
    .bg-orange { background-color: #ff6600 !important; color: white !important; }

    .btn-orange {
        background-color: #ff6600;
        color: #fff;
        font-weight: 500;
        border: none;
    }
    .btn-orange:hover { background-color: #e65c00; }

    .border-orange:focus {
        border-color: #ff6600 !important;
        box-shadow: 0 0 4px #ff6600 !important;
    }

    thead th {
        background-color: #ff6600 !important;
        color: white !important;
    }

    tbody tr:hover td {
        background-color: #fff3e5 !important;
    }

    .modal-header h5 {
        font-weight: 600;
    }
</style>
@endpush
@endsection
