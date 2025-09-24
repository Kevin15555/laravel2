<div class="sidebar">
    <div class="accordion" id="sidebarAccordion">
        <!-- Sidebar Menu Navigasi -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingNav">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNav" aria-expanded="false" aria-controls="collapseNav">
                    <i class="bi bi-list me-2"></i> Menu Navigasi
                </button>
            </h2>
            <div id="collapseNav" class="accordion-collapse collapse" aria-labelledby="headingNav">
                <div class="accordion-body p-0">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="{{ url('/dashboard') }}"><i class="bi bi-house me-2"></i> Dashboard</a></li>
                        <li class="nav-item dropdown-submenu">
                            <a class="nav-link" href="#"><i class="bi bi-person me-2"></i> Karyawan</a>
                            <ul class="dropdown-menu shadow">
                                <li><a class="dropdown-item" href="{{ route('karyawan.direksi') }}">Karyawan Direksi</a></li>
                                <li><a class="dropdown-item" href="#">Karyawan Tetap</a></li>
                                <li><a class="dropdown-item" href="#">Karyawan Kontrak</a></li>
                                <li><a class="dropdown-item" href="#">Magang & PKL</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-clock me-2"></i> Out Day</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-envelope me-2"></i> Surat</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-person-circle me-2"></i> Akun Iota</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-clock-history me-2"></i> Lembur</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-receipt-cutoff me-2"></i> Reimbursement</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-geo-alt me-2"></i> Akomodasi</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-briefcase me-2"></i> Uang Dinas</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Sidebar Finance -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFinance">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFinance" aria-expanded="false" aria-controls="collapseFinance">
                    <i class="bi bi-cash-coin me-2"></i> Finance
                </button>
            </h2>
            <div id="collapseFinance" class="accordion-collapse collapse show" aria-labelledby="headingFinance">
                <div class="accordion-body p-0">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-cash-stack me-2"></i> Petty Cash</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-currency-dollar me-2"></i> Cash Flow</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-coin me-2"></i> COA Master</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-piggy-bank me-2"></i> Slip Gaji</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('pajak.index') }}"><i class="bi bi-percent me-2"></i> Pajak</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"><i class="bi bi-shield-check me-2"></i> BPJS</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
