<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Cari Barang
                </div>
                <div class="card-body">
                    <input type="text" id="cari" class="form-control" name="cari" placeholder="Masukan Nama Barang / Kode Barang">
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    Hasil Pencarian
                </div>
                <div class="card-body">
                    <div id="hasil_cari"></div>
                    <div id="tunggu"></div>
                </div>
            </div>
        </div>

        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-primary d-flex align-items-lg-center justify-content-between">
                    <h5> <i class="fa fa-shopping-cart"></i> Kasir</h5>
                    <a href="">
                        <button class="btn btn-danger">Reset</button>
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td><b>Tanggal</b></td>
                            <td><input type="text" readonly="readonly" class="form-control" value="<?php echo date("j F Y, G:i"); ?>" name="tgl"></td>
                        </tr>
                    </table>


                    <table class="table table-bordered" id="example1">
                        <thead>
                            <tr>
                                <td> No</td>
                                <td> Nama Barang</td>
                                <td style="width:10%;"> Jumlah</td>
                                <td style="width:20%;"> Total</td>
                                <td> Kasir</td>
                                <td> Aksi</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Lux Body Wash</td>
                                <td>
                                    <form method="POST" action="fungsi/edit/edit.php?jual=jual">
                                        <input type="number" name="jumlah" value="<?php echo $isi['jumlah']; ?>" class="form-control">
                                        <input type="hidden" name="id" value="<?php echo $isi['id_penjualan']; ?>" class="form-control">
                                        <input type="hidden" name="id_barang" value="<?php echo $isi['id_barang']; ?>" class="form-control">
                                </td>
                                <td>Rp.25000,-</td>
                                <td><?php echo $isi['nm_member']; ?></td>
                                <td>
                                    <button class="btn btn-warning">Update</button>
                                    </form>
                                    <a href="fungsi/hapus/hapus.php?jual=jual&id=<?php echo $isi['id_penjualan']; ?>&brg=<?php echo $isi['id_barang']; ?>
														&jml=<?php echo $isi['jumlah']; ?>">
                                        <button class="btn btn-danger">x</button>
                                    </a>
                                </td>
                            </tr>
                    </table>

                    <table class="table table-stripped">
                        <form method="POST" action="index.php?page=jual&nota=yes#kasirnya">


                            <input type="hidden" name="id_barang[]" value="<?php echo $isi['id_barang']; ?>">
                            <input type="hidden" name="id_member[]" value="<?php echo $isi['id_member']; ?>">
                            <input type="hidden" name="jumlah[]" value="<?php echo $isi['jumlah']; ?>">
                            <input type="hidden" name="total1[]" value="<?php echo $isi['total']; ?>">
                            <input type="hidden" name="tgl_input[]" value="<?php echo $isi['tanggal_input']; ?>">
                            <input type="hidden" name="periode[]" value="<?php echo date('m-Y'); ?>">
                            <tr>
                                <td>Total Semua </td>
                                <td><input type="text" class="form-control" name="total" value="<?php echo $total_bayar; ?>"></td>

                                <td>Bayar </td>
                                <td><input type="text" class="form-control" name="bayar" value="<?php echo $bayar; ?>"></td>
                                <td><button class="btn btn-success"><i class="fa fa-shopping-cart"></i> Bayar</button></td>
                            </tr>
                        </form>
                        <tr>
                            <td>Kembali</td>
                            <td><input type="text" class="form-control" value="<?php echo $hitung; ?>"></td>
                            <td></td>
                            <td>
                                <a href="print.php?nm_member=<?php echo $_SESSION['admin']['nm_member']; ?>
													&bayar=<?php echo $bayar; ?>&kembali=<?php echo $hitung; ?>" target="_blank">
                                    <button class="btn btn-default">
                                        <i class="fa fa-print"></i> Print Untuk Bukti Pembayaran
                                    </button></a>
                            </td>

                        </tr>
                    </table>

                </div>
            </div>

        </div>
    </div>
    <div class="content"></div>
    <?= $this->endSection(); ?>