@extends('layout')

@section('title', 'Draft Pengajuan NPD - Karyawan')

@section('content')
<div class="container mt-4">
    <h4 class="mb-3 fw-semibold text-orange">Draft Pengajuan NPD</h4>

    <div class="card shadow-sm rounded-3">
        <div class="card-body p-0">
            <table class="table table-sm table-bordered table-hover mb-0 align-middle">
                <thead class="table-orange text-white">
                    <tr class="text-center">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Tujuan</th>
                        <th>Biaya</th>
                        <th>Realisasi</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody id="draftBody"></tbody>
            </table>
            <div id="emptyHint" class="p-3 text-center text-muted">Belum ada draft.</div>
        </div>
    </div>

    <div class="mt-3">
        <a href="/npd_karyawan/karyawan" class="btn btn-secondary">Kembali ke Halaman Utama</a>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

<style>
    .btn-orange { background-color: #ff7f32; border: none; color: white; }
    .btn-orange:hover { background-color: #e66a1f; color: white; }
    .table-orange { background-color: #ff7f32; }
    .text-orange { color: #ff7f32; }
</style>

<script>
let draftData = JSON.parse(localStorage.getItem('npd_drafts') || '[]');

if(draftData.length === 0){
    draftData = [
        {id:1,nama:'Ani Lestari', tanggal:'25/08/2025', jam:'09:00 - 15:00', tujuan:'Bandung', biaya:['Akomodasi'], realisasi:1200000, status:'Menunggu Approval'}
    ];
    localStorage.setItem('npd_drafts', JSON.stringify(draftData));
}

function renderDraft(){
    const tbody = document.getElementById('draftBody');
    tbody.innerHTML = '';
    if(draftData.length === 0){
        document.getElementById('emptyHint').style.display = 'block';
        return;
    } else {    
        document.getElementById('emptyHint').style.display = 'none';
    }

    draftData.forEach((item,index)=>{
        const tr = document.createElement('tr');
        tr.innerHTML = `
            <td class="text-center">${index+1}</td>
            <td>${item.nama}</td>
            <td>${item.tanggal}</td>
            <td>${item.jam}</td>
            <td>${item.tujuan}</td>
            <td>${item.biaya.join(', ')}</td>
            <td class="text-end">${item.realisasi.toLocaleString('id-ID')}</td>
            <td class="text-center"><span class="badge ${item.status==='Draft'?'bg-secondary':'bg-warning text-dark'}">${item.status}</span></td>
            <td class="text-center">
                ${item.status==='Draft' ? `
                <button class="btn btn-sm btn-orange me-1" onclick="editDraft(${index})"><i class="bi bi-pencil-square"></i> Edit</button>
                <button class="btn btn-sm btn-success me-1" onclick="ajukanDraft(${index})"><i class="bi bi-send"></i> Ajukan</button>
                <button class="btn btn-sm btn-danger me-1" onclick="hapusDraft(${index})"><i class="bi bi-trash"></i> Hapus</button>
                ` : `
                <button class="btn btn-sm btn-info text-white" onclick="lihatDraft(${index})"><i class="bi bi-eye"></i> Lihat</button>
                `}
            </td>
        `;
        tbody.appendChild(tr);
    });
}

// Edit: simpan index di localStorage, lalu redirect ke form
function editDraft(index){
    localStorage.setItem('edit_draft_index', index);
    window.location.href = '/npd_karyawan/form';
}

// Ajukan
function ajukanDraft(index){
    if(confirm('Ajukan draft ini?')){
        draftData[index].status = 'Menunggu Approval';
        localStorage.setItem('npd_drafts', JSON.stringify(draftData));
        renderDraft();
        alert('Draft diajukan (demo).');
    }
}

// Hapus
function hapusDraft(index){
    if(confirm('Hapus draft ini?')){
        draftData.splice(index,1);
        localStorage.setItem('npd_drafts', JSON.stringify(draftData));
        renderDraft();
        alert('Draft dihapus (demo).');
    }
}

// Lihat
function lihatDraft(index){
    const item = draftData[index];
    alert(`Detail Draft:\nNama: ${item.nama}\nTanggal: ${item.tanggal}\nJam: ${item.jam}\nTujuan: ${item.tujuan}\nBiaya: ${item.biaya.join(', ')}\nRealisasi: ${item.realisasi.toLocaleString('id-ID')}\nStatus: ${item.status}`);
}

renderDraft();
</script>
@endsection
