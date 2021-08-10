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
                    <td> Nama Barang</td>
                    <td style="width:10%;"> Jumlah</td>
                    <td style="width:20%;"> Total</td>
                    <td> Kasir</td>
                    <td> Tanggal Input</td>
                </tr>
            </thead>
            <tbody>

                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $isi['id_barang']; ?></td>
                    <td><?php echo $isi['nama_barang']; ?></td>
                    <td><?php echo $isi['jumlah']; ?> </td>
                    <td>Rp.<?php echo number_format($isi['total']); ?>,-</td>
                    <td><?php echo $isi['nm_member']; ?></td>
                    <td><?php echo $isi['tanggal_input']; ?></td>
                </tr>
            </tbody>
        </table>
        <div class="clearfix" style="padding-top:27%;"></div>
    </div>
</div>
<div class="content"></div>
<?= $this->endSection(); ?>