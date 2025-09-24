<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* CSS layout lama kamu */
    </style>
    @stack('styles') <!-- Tambahkan ini -->
    <style>
        body { margin: 0; font-family: Arial, sans-serif; font-size: 14px; }

        /* Sidebar */
        .sidebar {
            width: 220px;
            background-color: #f8f9fa;
            position: fixed;
            top: 60px;
            bottom: 0;
            overflow-y: auto;
            box-shadow: 2px 0 5px rgba(0,0,0,0.1);
            z-index: 1000;
        }

        .content { margin-left: 220px; padding: 20px; }

        .nav-link, .nav-link i {
            color: #343a40 !important;
            font-weight: normal;
            transition: background 0.2s, color 0.2s;
            border-radius: 4px;
            padding: 8px 12px;
            font-size: 14px;
        }

        /* Hover orange */
        .nav-link:hover {
            background-color: #f97316 !important;
            color: #fff !important;
        }
        .nav-link:hover i { color: #fff !important; }

        .dropdown-item { font-size: 14px; }
        .dropdown-item:hover { background-color: #f97316 !important; color: #fff !important; }

        .accordion-button { background-color: #fff; color: #333; font-weight: normal; font-size: 14px; box-shadow: none; }
        .accordion-button:not(.collapsed) { background-color: #fff; color: #333; }
        .accordion-button:focus { box-shadow: none; }
        .accordion-body { padding: 0.5rem 1rem; }
        .accordion-item { border: none; }
        .dropdown-submenu { position: relative; }
        .dropdown-submenu .dropdown-menu { top: 0; left: 100%; margin-top: -1px; }
        .dropdown-toggle::after { display: none; }

        @media(max-width: 768px){
            .sidebar { width: 100%; height: auto; position: relative; top: 0; }
            .content { margin-left: 0; }
        }
        .navbar-custom {
  background-color: #f97316;
  height: 60px;
  margin-left: 220px;
}
.navbar-custom .navbar-brand {
  color: white;
  font-weight: bold;
}
.navbar-custom .navbar-brand:hover {
  color: #fff;
}
.card-stat {
  background-color: #fff;
  padding: 1.5rem;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
  text-align: center;
  transition: transform 0.2s ease-in-out;
  height: 100%;
}
.card-stat:hover {
  transform: translateY(-5px);
}
.card-stat i {
  font-size: 2rem;
  color: #f97316;
}
.card-stat h5 {
  margin-top: 1rem;
  font-weight: 600;
}

/* Container dashboard biar nggak terlalu panjang */
.container-dashboard {
  max-width: 1200px;   /* atur lebar maksimal */
  margin-left: 220px;  /* biar pas sama sidebar */
  padding: 0 20px;
}

/* Responsive di HP */
@media (max-width: 768px) {
  .container-dashboard {
    margin-left: 0;
    max-width: 100%;
    padding: 1rem;
  }
}


    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="accordion" id="sidebarAccordion">
            <!-- Menu Navigasi -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingNav">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNav" aria-expanded="false">
                        <i class="bi bi-list me-2"></i> Menu Navigasi
                    </button>
                </h2>
                <div id="collapseNav" class="accordion-collapse collapse">
                    <div class="accordion-body">
                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}"><i class="bi bi-house me-2"></i> Dashboard</a></li>
                            <li class="nav-item dropdown-submenu">
    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
        <i class="bi bi-person me-2"></i> Karyawan
    </a>
    <ul class="dropdown-menu shadow">
        <li><a class="dropdown-item" href="{{ route('karyawan.direksi') }}">Direksi</a></li>
        <li><a class="dropdown-item" href="#">Karyawan Tetap</a></li>
        <li><a class="dropdown-item" href="#">Karyawan Kontrak</a></li>
        <li><a class="dropdown-item" href="#">Magang & PKL</a></li>
    </ul>
</li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/outday') }}"><i class="bi bi-clock me-2"></i> Out Day</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/surat') }}"><i class="bi bi-envelope me-2"></i> Surat</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/akun-iota') }}"><i class="bi bi-person-circle me-2"></i> Akun Iota</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/lembur') }}"><i class="bi bi-clock-history me-2"></i> Lembur</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/reimbursement') }}"><i class="bi bi-receipt-cutoff me-2"></i> Reimbursement</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/akomodasi') }}"><i class="bi bi-geo-alt me-2"></i> Akomodasi</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/uang-dinas') }}"><i class="bi bi-briefcase me-2"></i> Uang Dinas</a></li>
                        </ul>
                    </div>
                </div>
            </div>

<!-- Sidebar Finance -->
<div class="accordion-item">
    <h2 class="accordion-header" id="headingFinance">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFinance" aria-expanded="false">
            <i class="bi bi-cash-coin me-2"></i> Finance
        </button>
    </h2>
    <div id="collapseFinance" class="accordion-collapse collapse">
        <div class="accordion-body">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-cash-stack me-2"></i> Petty Cash
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-currency-dollar me-2"></i> Cash Flow
                    </a>
                </li>
               <li class="nav-item">
    <a class="nav-link {{ request()->routeIs('coa.master') ? 'active' : '' }}" href="{{ route('coa.master') }}">
        <i class="bi bi-coin me-2"></i> COA Master
    </a>
</li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="bi bi-piggy-bank me-2"></i> Slip Gaji
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pajak.index') }}">
                        <i class="bi bi-percent me-2"></i> Pajak
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bpjs.index') }}">
                        <i class="bi bi-shield-check me-2"></i> BPJS
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

            
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="content">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
