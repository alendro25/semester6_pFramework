<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h2 class="mb-3">Form Ubah</h2>

    <form action="/barang/update/<?= $barang['id_barang']; ?>" method="POST">
        <?= csrf_field(); ?>
        <div class="form-group row">
            <label for="id_barang" class="col-sm-2 col-form-label">ID Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="id_barang" name="id_barang" readonly value="<?= $barang['id_barang']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="id_kategori" class="col-sm-2 col-form-label">Kategori</label>
            <div class="col-sm-10">
                <select class="form-control" id="id_kategori" name="id_kategori">
                    <option>Pilih Kategori</option>
                    <option value="1">ATK</option>
                    <option value="5">Sabun</option>
                    <option value="7">Beauty</option>
                    <option value="18">Garage</option>
                    <option value="19">Warehouse</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama_barang" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_barang" name="nama_barang" value="<?= $barang['nama_barang']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="merk" class="col-sm-2 col-form-label">Merek Barang</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="merk" name="merk" value="<?= $barang['merk']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga_beli" class="col-sm-2 col-form-label">Harga Beli</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="harga_beli" name="harga_beli" value="<?= $barang['harga_beli']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="harga_jual" class="col-sm-2 col-form-label">Harga jual</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="<?= $barang['harga_jual']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="satuan_barang" class="col-sm-2 col-form-label">Satuan Barang</label>
            <div class="col-sm-10">
                <select class="form-control" id="satuan_barang" name="satuan_barang">
                    <option>Pilih Satuan</option>
                    <option value="PCS"><?= $barang['satuan_barang']; ?></option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="stok" name="stok" value="<?= $barang['stok']; ?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_input" class="col-sm-2 col-form-label">Tanggal Input</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="tgl_input" name="tgl_input" readonly value="<?= $barang['updated_at']; ?>">
            </div>
        </div>
        <br>
        <a class="btn btn-warning" href="/barang">Kembali</a>
        <button type="submit" class="btn btn-primary">Update Data</button>
    </form>
</div>

<?= $this->endSection(); ?>