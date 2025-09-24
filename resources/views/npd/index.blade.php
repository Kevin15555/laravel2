@extends('layout')

@section('title', 'NPD - Itinerary & Pengajuan')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Daftar Pengajuan NPD</h2>
{{-- Button fitur --}}
<div class="mb-3 d-flex flex-wrap gap-2">
    <a href="{{ url('/npd/itinerary') }}" class="btn btn-warning">Itinerary</a>
    <a href="{{ url('/npd/export') }}" class="btn btn-secondary">Export</a>
</div>


    {{-- Tabel data --}}
    <div class="card shadow-sm mb-4">
        <div class="card-body">
            <table class="table table-bordered table-striped align-middle">
                <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama Karyawan</th>
                        <th>Tanggal</th>
                        <th>Tujuan</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Budi Santoso</td>
                        <td>21/08/2025</td>
                        <td>Jakarta</td>
                        <td><span class="badge bg-warning">Menunggu</span></td>
                        <td>
                            <a href="{{ route('npd.detail', 1) }}" class="btn btn-sm btn-info">Detail</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    {{-- Grafik Statistik --}}
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-light"><strong>Status Pengajuan</strong></div>
                <div class="card-body" style="height:200px">
                    <canvas id="statusChart"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-header bg-light"><strong>Jumlah NPD per Bulan</strong></div>
                <div class="card-body" style="height:200px">
                    <canvas id="bulanChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Chart.js --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Ambil semua baris tabel
    const tableRows = document.querySelectorAll('table tbody tr');

    // Inisialisasi status
    const statusCounts = { 'Menunggu': 0, 'Disetujui': 0, 'Ditolak': 0 };
    const bulanCounts = {};

    tableRows.forEach(row => {
        // Status
        const statusText = row.querySelector('td:nth-child(5) span').innerText.trim();
        if(statusCounts[statusText] !== undefined) statusCounts[statusText]++;

        // Bulan
        const tanggalText = row.querySelector('td:nth-child(3)').innerText.trim(); // format dd/mm/yyyy
        const month = parseInt(tanggalText.split('/')[1], 10); // ambil bulan
        if(!bulanCounts[month]) bulanCounts[month] = 0;
        bulanCounts[month]++;
    });

    // Status Chart
    const ctxStatus = document.getElementById('statusChart').getContext('2d');
    new Chart(ctxStatus, {
        type: 'doughnut',
        data: {
            labels: Object.keys(statusCounts),
            datasets: [{
                data: Object.values(statusCounts),
                backgroundColor: ['#f0ad4e', '#5cb85c', '#d9534f']
            }]
        },
        options: { responsive: true, plugins: { legend: { position: 'bottom' } } }
    });

    // Bulan Chart
    const monthLabels = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];
    const monthData = monthLabels.map((_, index) => bulanCounts[index + 1] || 0);

    const ctxBulan = document.getElementById('bulanChart').getContext('2d');
    new Chart(ctxBulan, {
        type: 'bar',
        data: {
            labels: monthLabels,
            datasets: [{
                label: 'Jumlah NPD',
                data: monthData,
                backgroundColor: '#0d6efd'
            }]
        },
        options: {
            responsive: true,
            plugins: { legend: { display: false } },
            scales: { y: { beginAtZero: true } }
        }
    });
</script>
@endsection
