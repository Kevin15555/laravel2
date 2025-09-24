@extends('layout')

@section('title', 'Form Pengajuan NPD - Karyawan')

@section('content')
<div class="container mt-4">
    <h4 class="mb-3 fw-semibold text-orange">Form Pengajuan NPD</h4>

    <div class="card shadow-sm rounded-3">
        <div class="card-body">
            <form id="npdForm">
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Nama Karyawan</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukkan nama">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label class="form-label">Jam Berangkat</label>
                        <input type="time" class="form-control" id="jamBerangkat">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Jam Pulang</label>
                        <input type="time" class="form-control" id="jamPulang">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tujuan</label>
                    <input type="text" class="form-control" id="tujuan" placeholder="Masukkan tujuan">
                </div>

                <div class="mb-3">
                    <label class="form-label">Biaya yang Diajukan</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Transportasi" id="transport">
                        <label class="form-check-label" for="transport">Transportasi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Akomodasi" id="akomodasi">
                        <label class="form-check-label" for="akomodasi">Akomodasi</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="Konsumsi" id="konsumsi">
                        <label class="form-check-label" for="konsumsi">Konsumsi</label>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Realisasi Biaya (Rp)</label>
                    <input type="number" class="form-control" id="realisasi" placeholder="Masukkan jumlah">
                </div>

                <div class="d-flex gap-2">
          <a href="/npd_karyawan/karyawan" class="btn btn-secondary">Kembali</a>

                    <button type="submit" class="btn btn-orange">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
    .btn-orange { background-color: #ff7f32; border: none; color: white; }
    .btn-orange:hover { background-color: #e66a1f; color: white; }
    .text-orange { color: #ff7f32; }
</style>

<script>
let draftData = JSON.parse(localStorage.getItem('npd_drafts') || '[]');
let editIndex = localStorage.getItem('edit_draft_index');
if(editIndex!==null){
    editIndex = parseInt(editIndex,10);
    const item = draftData[editIndex];
    document.getElementById('nama').value = item.nama;
    document.getElementById('tanggal').value = item.tanggal;
    if(item.jam){
        const jam = item.jam.split(' - ');
        document.getElementById('jamBerangkat').value = jam[0];
        document.getElementById('jamPulang').value = jam[1];
    }
    document.getElementById('tujuan').value = item.tujuan;
    document.getElementById('transport').checked = item.biaya.includes('Transportasi');
    document.getElementById('akomodasi').checked = item.biaya.includes('Akomodasi');
    document.getElementById('konsumsi').checked = item.biaya.includes('Konsumsi');
    document.getElementById('realisasi').value = item.realisasi;
}

document.getElementById('npdForm').addEventListener('submit', function(e){
    e.preventDefault();
    const biaya = [];
    if(document.getElementById('transport').checked) biaya.push('Transportasi');
    if(document.getElementById('akomodasi').checked) biaya.push('Akomodasi');
    if(document.getElementById('konsumsi').checked) biaya.push('Konsumsi');

    const data = {
        nama: document.getElementById('nama').value,
        tanggal: document.getElementById('tanggal').value,
        jam: document.getElementById('jamBerangkat').value + ' - ' + document.getElementById('jamPulang').value,
        tujuan: document.getElementById('tujuan').value,
        biaya: biaya,
        realisasi: Number(document.getElementById('realisasi').value),
        status: 'Draft'
    };

    if(editIndex!==null){
        draftData[editIndex] = data;
        localStorage.removeItem('edit_draft_index');
    } else {
        draftData.push(data);
    }

    localStorage.setItem('npd_drafts', JSON.stringify(draftData));
    alert('Draft tersimpan!');
    window.location.href = '/npd_karyawan/draft';
});
</script>
@endsection
