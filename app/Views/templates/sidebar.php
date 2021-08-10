<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('/home') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fab fa-buysellads"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SI Supermarket</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
        Dashboard
    </div>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/home'); ?>">
            <i class="fas fa-fw fa-table"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Master
    </div>

    <!-- Nav Item - Data Master -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Master</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url('/barang'); ?>">Barang</a>
                <a class="collapse-item" href="<?= base_url('/Kategori'); ?>">Kategori</a>
                <a class="collapse-item" href="<?= base_url('/users'); ?>">Users</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Transaksi
    </div>

    <!-- Nav Item - Transaksi1 -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/jual'); ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Transaksi Jual</span></a>
    </li>
    <!-- Nav Item - Transaksi2 -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/laporan'); ?>">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Laporan Penjualan</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>