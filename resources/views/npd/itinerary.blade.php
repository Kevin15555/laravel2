@extends('layout')

@section('title', 'Itinerary')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4 text-orange">Daftar Itinerary</h2>
    
    <!-- Tombol Buat Itinerary -->
    <button class="btn btn-orange mb-3" data-bs-toggle="modal" data-bs-target="#buatItineraryModal">
        + Buat Itinerary
    </button>

    <!-- Tabel Itinerary -->
    <div class="card shadow-sm rounded-3">
        <div class="card-body p-0">
            <table class="table table-bordered mb-0" id="itineraryTable">
                <thead class="table-orange text-white">
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Divisi</th>
                        <th>Jadwal</th>
                        <th>Transportasi & Akomodasi</th>
                        <th>PIC Daerah</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Contoh Karyawan</td>
                        <td>Karyawan</td>
                        <td>20 - 22 Agustus 2025</td>
                        <td>Pesawat + Hotel</td>
                        <td>Budi - 08123456789</td>
                        <td><button class="btn btn-sm btn-orange">Detail</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Buat Itinerary -->
<div class="modal fade" id="buatItineraryModal" tabindex="-1">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-orange text-white">
        <h5 class="modal-title">Buat Itinerary Baru</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>
      <div class="modal-body">
        <form id="itineraryForm">
          <!-- Input Nama Karyawan -->
          <div class="mb-3">
            <label class="form-label">Nama Karyawan</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan nama karyawan" required>
          </div>
          
          <!-- Dropdown Divisi -->
          <div class="mb-3">
            <label class="form-label">Divisi</label>
            <select class="form-select" name="divisi" required>
              <option value="" disabled selected>Pilih divisi</option>
              <option value="Karyawan">Karyawan</option>
              <option value="HR">HR</option>
              <option value="Admin">Admin</option>
            </select>
          </div>

          <!-- Input Jadwal -->
          <div class="mb-3">
            <label class="form-label">Jadwal Kegiatan Per Hari</label>
            <textarea class="form-control" name="jadwal" rows="3" placeholder="Contoh: 20 Agustus - Meeting, 21 Agustus - Presentasi" required></textarea>
          </div>

          <!-- Transportasi & Akomodasi -->
          <div class="mb-3">
            <label class="form-label">Transportasi & Akomodasi</label>
            <input type="text" class="form-control" name="transportasi" placeholder="Pesawat, Hotel, dll" required>
          </div>

          <!-- PIC -->
          <div class="mb-3">
            <label class="form-label">PIC kegiatan</label>
            <input type="text" class="form-control" name="pic" placeholder="Nama PIC" required>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-orange" id="btnSimpan">Kirim Notifikasi & Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- Custom Style -->
<style>
    .btn-orange {
        background-color: #ff7f32;
        border: none;
        color: white;
    }
    .btn-orange:hover {
        background-color: #e66a1f;
        color: white;
    }
    .table-orange {
        background-color: #ff7f32;
    }
    .text-orange {
        color: #ff7f32;
    }
    .bg-orange {
        background-color: #ff7f32 !important;
    }
</style>

<!-- Script -->
<script>
document.getElementById("btnSimpan").addEventListener("click", function() {
    let form = document.getElementById("itineraryForm");

    if (form.checkValidity()) {
        // Ambil data dari form
        let nama = form.nama.value;
        let divisi = form.divisi.value;
        let jadwal = form.jadwal.value;
        let transportasi = form.transportasi.value;
        let pic = form.pic.value;

        // Tambahkan data baru ke tabel
        let table = document.getElementById("itineraryTable").getElementsByTagName("tbody")[0];
        let newRow = table.insertRow();

        let no = table.rows.length; // auto numbering

        newRow.innerHTML = `
            <td>${no}</td>
            <td>${nama}</td>
            <td>${divisi}</td>
            <td>${jadwal}</td>
            <td>${transportasi}</td>
            <td>${pic}</td>
            <td><button class="btn btn-sm btn-orange">Detail</button></td>
        `;

        // Simulasi notifikasi
        alert("Notifikasi terkirim ke karyawan & data berhasil disimpan!");

        // Reset form
        form.reset();

        // Tutup modal
        let modal = bootstrap.Modal.getInstance(document.getElementById('buatItineraryModal'));
        modal.hide();
    } else {
        form.reportValidity();
    }
});
</script>
@endsection
