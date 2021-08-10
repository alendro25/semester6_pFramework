<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <a href="<?= base_url('/barang'); ?>" class="btn btn-warning">Kembali</a>

    <br><br>

    <h1>Details Barang</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID Barang</th>
                <th scope="col">Kategori</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Merek Barang</th>
                <th scope="col">Harga Beli</th>
                <th scope="col">Harga Jual</th>
                <th scope="col">Satuan Barang</th>
                <th scope="col">Stok</th>
                <th scope="col">Tgl Input</th>
                <th scope="col">Tgl Update</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <th scope="row"><?= $barang['id_barang']; ?></th>
                <td><?= $barang['id_kategori']; ?></td>
                <td><?= $barang['nama_barang']; ?></td>
                <td><?= $barang['merk']; ?></td>
                <td><?= $barang['harga_beli']; ?></td>
                <td><?= $barang['harga_jual']; ?></td>
                <td><?= $barang['satuan_barang']; ?></td>
                <td><?= $barang['stok']; ?></td>
                <td><?= $barang['created_at']; ?></td>
                <td><?= $barang['updated_at']; ?></td>
            </tr>

        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>