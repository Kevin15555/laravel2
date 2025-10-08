@extends('layout')

@section('title', 'Slip Gaji - Karyawan')

@section('content')
<div class="container mt-4">
    <h4 style="color:#ff6600;" class="fw-bold mb-3">Slip Gaji Karyawan</h4>

    <div class="card shadow-sm">
        <div class="card-body p-0">
            <table class="table table-bordered mb-0">
                <thead style="background-color:#ff6600;color:#fff;">
                    <tr>
                        <th>No</th>
                        <th>Keterangan</th>
                        <th>Pendapatan (Rp)</th>
                        <th>Pengurangan (Rp)</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody style="text-align:center;">
                    <tr>
                        <td>1</td>
                        <td>Gaji Pokok</td>
                        <td>5.000.000</td>
                        <td>-</td>
                        <td rowspan="8" style="vertical-align:middle;">
                            <button class="btn btn-success btn-sm mb-1">Setuju</button><br>
                            <button class="btn btn-danger btn-sm">Tolak</button>
                        </td>
                    </tr>
                    <tr><td>2</td><td>Tunjangan</td><td>42.000</td><td>-</td></tr>
                    <tr><td>3</td><td>Lembur</td><td>-</td><td>-</td></tr>
                    <tr><td>4</td><td>Transport & Makan</td><td>-</td><td>-</td></tr>
                    <tr><td>5</td><td>Tunjangan Hari Raya</td><td>5.000.000</td><td>-</td></tr>
                    <tr><td>6</td><td>BPJS Kesehatan</td><td>-</td><td>50.674</td></tr>
                    <tr><td>7</td><td>JHT</td><td>-</td><td>100.000</td></tr>
                    <tr><td>8</td><td>Jaminan Pensiun</td><td>-</td><td>50.000</td></tr>
                    <tr><td>9</td><td>PPH 21</td><td>-</td><td>200.840</td></tr>
                    <tr class="fw-bold table-light">
                        <td colspan="2">TOTAL</td>
                        <td>10.042.000</td>
                        <td>401.514</td>
                        <td>-</td>
                    </tr>
                    <tr class="fw-bold table-warning">
                        <td colspan="2">THP (Take Home Pay)</td>
                        <td colspan="3" style="text-align:right; color:#ff6600;">9.640.486</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
