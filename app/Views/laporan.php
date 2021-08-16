<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <h4>Cari Laporan Per Perbulan</h4>
    <form method="post" action="index.php?page=laporan&cari=ok">
        <table>
            <tr>
                <td style="padding-left:2pc;">
                    Pilih Bulan
                </td>
                <td style="padding-left:2pc;">
                    Pilih Tahun
                </td>
                <td style="padding-left:2pc;">
                    Aksi
                </td>
            </tr>
            <tr>
                <td style="padding-left:2pc;">
                    <select name="bln">
                        <option selected="selected">Bulan</option>
                        <?php
                        $bulan = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
                        $jlh_bln = count($bulan);
                        $bln1 = array('01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12');
                        $no = 1;
                        for ($c = 0; $c < $jlh_bln; $c += 1) {
                            echo "<option value='$bln1[$c]'> $bulan[$c] </option>";
                            $no++;
                        }
                        ?>
                    </select>
                </td>
                <td style="padding-left:2pc;">

                </td>
                <td style="padding-left:2pc;">
                    <input type="hidden" name="periode" value="ya">
                    <button class="btn btn-primary">
                        Cari
                    </button>
                </td>
            </tr>
        </table>
    </form>

    <div class="modal-view">
        <table class="table table-bordered" id="example1">
            <thead>
                <tr>
                    <td> No</td>
                    <td> ID Barang</td>
                    <td> Kode Barang</td>
                    <td style="width:10%;"> Jumlah</td>
                    <td style="width:20%;"> Total</td>
                    <td> Kasir</td>
                    <td> Tanggal Input</td>
                </tr>
            </thead>
            <tbody>

                <?php $i = 1; ?>
                <?php foreach ($nota as $n) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $n['id_nota']; ?></td>
                        <td><?= $n['id_barang']; ?></td>
                        <td><?= $n['jumlah']; ?> </td>
                        <td>Rp.<?= $n['total']; ?>,-</td>
                        <td>Gerald Alessandro Timothy</td>
                        <td><?= $n['tanggal_input']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <?php $db      = \Config\Database::connect(); ?>
        <?php $builder3 = $db->table('nota'); ?>
        <?php $hitungPenjualan = $builder3->selectSum('total'); ?>
        <?php $hitungPenjualan = $builder3->get(); ?>
        <?php $totalJual = $hitungPenjualan->getResult(); ?>

        <h3>Pemasukan : Rp <?= $totalJual[0]->total; ?>,- </h3>
        <div class="clearfix" style="padding-top:27%;"></div>
    </div>
</div>
<div class="content"></div>
<?= $this->endSection(); ?>