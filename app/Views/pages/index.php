<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">


    <?php $db      = \Config\Database::connect(); ?>
    <?php $builder = $db->table('barang'); ?>
    <?php $query = $builder->countAll(); ?>
    <?php $hitungStok = $builder->selectSum('stok'); ?>
    <?php $hasilStok = $builder->get(); ?>
    <?php $stok = $hasilStok->getResult(); ?>
    <?php $hitungModal = $builder->selectSum('harga_beli'); ?>
    <?php $hitungModal = $builder->get(); ?>
    <?php $modal = $hitungModal->getResult(); ?>

    <?php $builder2 = $db->table('kategori'); ?>
    <?php $query2 = $builder2->countAll(); ?>
    <?php $y = $db->query('SELECT SUM(harga_beli*stok) FROM barang'); ?>
    <?php $y = $y->getResult(); ?>

    <?php $builder3 = $db->table('nota'); ?>
    <?php $hitungPenjualan = $builder3->selectSum('jumlah'); ?>
    <?php $hitungPenjualan = $builder3->get(); ?>
    <?php $totalJual = $hitungPenjualan->getResult(); ?>
    <?php $hitungTotal = $builder3->selectSum('total'); ?>
    <?php $hitungTotal = $builder3->get(); ?>
    <?php $totalUang = $hitungTotal->getResult(); ?>



    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Nama Barang Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Nama Barang</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $query; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <br>
                    <div class="row no-gutters align-items-center">
                        <a href="<?= base_url('/barang'); ?>">Tabel Barang <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Stok Barang Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Stok Barang</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $stok[0]->stok; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <br>
                    <div class="row no-gutters align-items-center">
                        <a href="<?= base_url('/barang'); ?>">Tabel Barang <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Barang Terjual Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Barang Terjual
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">
                                        <?= $totalJual[0]->jumlah; ?>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: <?= $totalJual[0]->jumlah; ?>%" aria-valuenow="<?= $totalJual[0]->jumlah; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <br>
                    <div class="row no-gutters align-items-center">
                        <a href="<?= base_url('/laporan'); ?>">Tabel Laporan <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kategori Barang Card -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Kategori Barang</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <?= $query2; ?>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                        </div>
                    </div>
                    <br>
                    <div class="row no-gutters align-items-center">
                        <a href="<?= base_url('/kategori'); ?>">Tabel Kategori <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <div class="col-lg-6">
            <!-- Pemasukan Uang Card Example -->
            <div class="card mb-4">
                <div class="card-header bg-success text-white">
                    Pemasukan Uang
                </div>
                <div class="card-body">
                    Rp. <?= $totalUang[0]->total; ?>,-
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <!-- Default Card Example -->
            <div class="card mb-4">
                <div class="card-header bg-danger text-white">
                    Pengeluaran Uang (Modal)
                </div>
                <div class="card-body">
                    Rp. <?= $y[0]->{'SUM(harga_beli*stok)'}; ?>,-
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>