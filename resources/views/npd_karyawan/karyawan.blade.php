@extends('layout')

@section('title', 'NPD - Karyawan')

@section('content')
<div class="container mt-4">
    <h4 class="mb-3 fw-semibold text-orange">NPD - Karyawan</h4>

    {{-- Tombol Menu --}}
    <div class="d-flex flex-wrap gap-2 mb-3">
        <a href="/npd_karyawan/form" class="btn btn-sm btn-outline-orange">
            <i class="bi bi-pencil-square me-1"></i> Form Pengajuan
        </a>
        <a href="/npd_karyawan/draft" class="btn btn-sm btn-outline-orange">
            <i class="bi bi-save me-1"></i> Draft
        </a>
    </div>

    {{-- Riwayat Pengajuan --}}
    <div class="card shadow-sm rounded-2">
        <div class="card-header bg-orange text-white py-2 d-flex justify-content-between align-items-center">
            <strong><i class="bi bi-clock-history me-1"></i> Riwayat Pengajuan</strong>
            <div>
                <button id="clearAll" class="btn btn-sm btn-outline-light">Clear Demo Data</button>
            </div>
        </div>
        <div class="card-body p-0">
            <table class="table table-sm table-bordered table-hover mb-0 align-middle" id="historyTable">
                <thead class="table-orange text-white">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tgl</th>
                        <th>Tujuan</th>
                        <th>Kebutuhan</th>
                        <th>Est. Biaya</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="historyBody">
                    <!-- diisi oleh JS -->
                </tbody>
            </table>
            <div id="emptyHint" class="p-3 text-center text-muted">Belum ada pengajuan. Buat pengajuan baru lewat tombol <strong>Form Pengajuan</strong>.</div>
        </div>
    </div>
</div>

<!-- Modal Detail -->
<div class="modal fade" id="detailModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-orange text-white">
        <h5 class="modal-title">Detail Pengajuan</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body" id="detailBody">
        <!-- diisi JS -->
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Upload Bukti -->
<div class="modal fade" id="buktiModal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-orange text-white">
        <h5 class="modal-title">Upload Bukti Pembayaran</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="buktiForm">
            <div class="mb-3">
                <label class="form-label">Nominal Realisasi</label>
                <input type="number" class="form-control" id="bukti_nominal" placeholder="Masukkan nominal (mis. 2500000)">
            </div>
            <div class="mb-3">
                <label class="form-label">Upload File Bukti</label>
                <input type="file" class="form-control" id="bukti_file">
            </div>
            <input type="hidden" id="bukti_id">
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-orange" id="saveBuktiBtn">Simpan Bukti</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Input Realisasi Rincian -->
<div class="modal fade" id="realisasiModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-orange text-white">
        <h5 class="modal-title">Input Realisasi Biaya</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="realisasiForm">
            <div class="mb-3">
                <label class="form-label">Transportasi (realisasi)</label>
                <input type="number" class="form-control" id="real_transport" placeholder="0">
            </div>
            <div class="mb-3">
                <label class="form-label">Akomodasi (realisasi)</label>
                <input type="number" class="form-control" id="real_akomodasi" placeholder="0">
            </div>
            <div class="mb-3">
                <label class="form-label">Uang Makan (realisasi)</label>
                <input type="number" class="form-control" id="real_makan" placeholder="0">
            </div>
            <div class="mb-3">
                <label class="form-label">Lain-lain (realisasi)</label>
                <input type="number" class="form-control" id="real_lain" placeholder="0">
            </div>
            <input type="hidden" id="real_id">
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button class="btn btn-orange" id="saveRealBtn">Simpan Realisasi</button>
      </div>
    </div>
  </div>
</div>

{{-- Bootstrap Icons --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

{{-- Custom Style Oranye --}}
<style>
    .btn-orange { background-color: #ff7f32; border: none; color: white; }
    .btn-outline-orange { border: 1px solid #ff7f32; color: #ff7f32; background: transparent; }
    .table-orange { background-color: #ff7f32; }
    .text-orange { color: #ff7f32; }
    .bg-orange { background-color: #ff7f32 !important; }
    #emptyHint { display:none; }
</style>

<script>
/*
  Simple localStorage-based demo flow:
  - Drafts stored at key 'npd_drafts' (array)
  - History stored at key 'npd_history' (array)
*/
function qs(id){ return document.getElementById(id); }

function getStorage(key){ return JSON.parse(localStorage.getItem(key) || '[]'); }
function setStorage(key, data){ localStorage.setItem(key, JSON.stringify(data)); }

function formatCurrency(n){
    return Number(n || 0).toLocaleString('id-ID');
}

function renderHistory(){
    const body = qs('historyBody');
    const list = getStorage('npd_history');
    body.innerHTML = '';
    if(list.length === 0){
        qs('emptyHint').style.display = 'block';
        return;
    } else qs('emptyHint').style.display = 'none';

    list.forEach((item, idx) => {
        const estTotal = (item.est_transport||0) + (item.est_akomodasi||0) + (item.est_makan||0) + (item.est_lain||0);
        const kebutuhan = [];
        if(item.transportasi) kebutuhan.push('Transportasi');
        if(item.akomodasi) kebutuhan.push('Akomodasi');
        if(item.advance) kebutuhan.push('Advance');
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td class="text-center">${idx+1}</td>
            <td>${item.nama||'-'}</td>
            <td>${item.tanggal_berangkat? item.tanggal_berangkat : '-'}</td>
            <td>${item.tujuan||'-'}</td>
            <td>${kebutuhan.join(', ')}</td>
            <td class="text-end">${formatCurrency(estTotal)}</td>
            <td class="text-center"><span class="badge bg-light text-dark border">${item.status||'Menunggu'}</span></td>
            <td class="text-center">
                <button class="btn btn-sm btn-outline-dark me-1" onclick="showDetail(${idx})"><i class="bi bi-eye"></i></button>
                <button class="btn btn-sm btn-outline-orange me-1" onclick="openBuktiModal(${idx})"><i class="bi bi-upload"></i></button>
                <button class="btn btn-sm btn-outline-dark" onclick="openRealModal(${idx})"><i class="bi bi-currency-dollar"></i></button>
            </td>
        `;
        body.appendChild(tr);
    });
}

function showDetail(idx){
    const list = getStorage('npd_history');
    const item = list[idx];
    const body = qs('detailBody');
    body.innerHTML = `
        <dl class="row">
            <dt class="col-4">Nama</dt><dd class="col-8">${item.nama||'-'}</dd>
            <dt class="col-4">Tanggal Berangkat</dt><dd class="col-8">${item.tanggal_berangkat || '-' } ${item.jam_berangkat || ''}</dd>
            <dt class="col-4">Tanggal Kembali</dt><dd class="col-8">${item.tanggal_kembali || '-' } ${item.jam_pulang || ''}</dd>
            <dt class="col-4">Tujuan</dt><dd class="col-8">${item.tujuan||'-'}</dd>
            <dt class="col-4">Kebutuhan</dt><dd class="col-8">
                ${item.transportasi? 'Transportasi<br>': '' }
                ${item.akomodasi? 'Akomodasi<br>' : '' }
                ${item.advance? `Advance: ${formatCurrency(item.advance_amount||0)}<br>` : '' }
            </dd>
            <dt class="col-4">Estimasi Biaya</dt>
            <dd class="col-8">
                Transport: ${formatCurrency(item.est_transport||0)} <br>
                Akomodasi: ${formatCurrency(item.est_akomodasi||0)} <br>
                Makan: ${formatCurrency(item.est_makan||0)} <br>
                Lain: ${formatCurrency(item.est_lain||0)} <br>
            </dd>
            <dt class="col-4">Lampiran</dt>
            <dd class="col-8">${(item.attach || []).map(x=>x.name).join('<br>') || '-'}</dd>
            <dt class="col-4">Bukti Pembayaran</dt>
            <dd class="col-8">${item.bukti?.fileName ? item.bukti.fileName + ' (Rp '+ formatCurrency(item.bukti.nominal) +')' : '-'}</dd>
            <dt class="col-4">Realisasi</dt>
            <dd class="col-8">
                ${item.realisasi ? 
                    `Transport: ${formatCurrency(item.realisasi.transport)} <br>
                     Akomodasi: ${formatCurrency(item.realisasi.akomodasi)} <br>
                     Makan: ${formatCurrency(item.realisasi.makan)} <br>
                     Lain: ${formatCurrency(item.realisasi.lain)}`
                : '-'}
            </dd>
        </dl>
    `;
    let modal = new bootstrap.Modal(document.getElementById('detailModal'));
    modal.show();
}

function openBuktiModal(idx){
    qs('bukti_id').value = idx;
    qs('bukti_nominal').value = '';
    qs('bukti_file').value = '';
    let modal = new bootstrap.Modal(document.getElementById('buktiModal'));
    modal.show();
}

function openRealModal(idx){
    qs('real_id').value = idx;
    qs('real_transport').value = '';
    qs('real_akomodasi').value = '';
    qs('real_makan').value = '';
    qs('real_lain').value = '';
    let modal = new bootstrap.Modal(document.getElementById('realisasiModal'));
    modal.show();
}

document.getElementById('saveBuktiBtn').addEventListener('click', function(){
    const idx = parseInt(qs('bukti_id').value,10);
    const nominal = Number(qs('bukti_nominal').value || 0);
    const fileInput = qs('bukti_file');
    const file = fileInput.files[0];
    if(!nominal || !file){
        alert('Masukkan nominal dan pilih file bukti.');
        return;
    }
    const list = getStorage('npd_history');
    const item = list[idx];
    item.bukti = { nominal: nominal, fileName: file.name };
    // update status simple
    item.status = 'Bukti Dikirim';
    setStorage('npd_history', list);
    renderHistory();
    bootstrap.Modal.getInstance(document.getElementById('buktiModal')).hide();
    alert('Bukti tersimpan (demo).');
});

document.getElementById('saveRealBtn').addEventListener('click', function(){
    const idx = parseInt(qs('real_id').value,10);
    const transport = Number(qs('real_transport').value||0);
    const akomodasi = Number(qs('real_akomodasi').value||0);
    const makan = Number(qs('real_makan').value||0);
    const lain = Number(qs('real_lain').value||0);
    const list = getStorage('npd_history');
    const item = list[idx];
    item.realisasi = { transport, akomodasi, makan, lain };
    item.status = 'Realisasi Diinput';
    setStorage('npd_history', list);
    renderHistory();
    bootstrap.Modal.getInstance(document.getElementById('realisasiModal')).hide();
    alert('Realisasi tersimpan (demo).');
});

document.getElementById('clearAll').addEventListener('click', function(){
    if(confirm('Hapus semua data demo (draft & history)?')){
        localStorage.removeItem('npd_drafts');
        localStorage.removeItem('npd_history');
        renderHistory();
        alert('Data demo dihapus.');
    }
});

// inisialisasi contoh demo jika belum ada
(function initDemo(){
    if(!localStorage.getItem('npd_history')){
        const demo = [{
            nama: 'Budi Santoso',
            tanggal_berangkat: '2025-08-21',
            jam_berangkat: '08:00',
            tanggal_kembali: '2025-08-21',
            jam_pulang: '18:00',
            tujuan: 'Jakarta',
            transportasi: true,
            akomodasi: false,
            advance: false,
            est_transport: 500000,
            est_akomodasi: 0,
            est_makan: 150000,
            est_lain: 0,
            attach: [],
            status: 'Menunggu'
        }];
        setStorage('npd_history', demo);
    }
    renderHistory();
})();
</script>
@endsection
