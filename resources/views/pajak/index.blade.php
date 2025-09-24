@extends('layout')

@section('title', 'Pajak - Perusahaan')

@section('content')
<div class="container mt-4">
    <h4 style="color:#ff6600;" class="fw-bold mb-3">Pajak - Perusahaan</h4>

    <!-- Tombol -->
    <div class="mb-3">
        <button style="background-color:#ff6600;color:#fff;font-weight:500;border:none;padding:6px 12px;margin-right:8px;">
            Bukti
        </button>
        <button style="background-color:#ff6600;color:#fff;font-weight:500;border:none;padding:6px 12px;">
            Select Approve
        </button>
    </div>

    <!-- Tabel -->
    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead style="background-color:#ff6600;color:#fff;">
                    <tr>
                        <th>No</th>
                        <th>PPh</th>
                        <th>PPN</th>
                        <th>PPnBM</th>
                        <th>PBB</th>
                        <th>Iuran pajak</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="text-align:center;">
                        <td colspan="6">-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
