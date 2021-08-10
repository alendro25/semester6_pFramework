<?= $this->extend('templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Barang</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"> <i class="bi bi-plus"></i> Tambah Data Barang</button>

    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success mt-2" role="alert">
            Data berhasil di tambahkan!
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('pesan2')) : ?>
        <div class="alert alert-danger mt-2" role="alert">
            Data berhasil di hapus!
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('pesan3')) : ?>
        <div class="alert alert-danger mt-2" role="alert">
            Data berhasil di update!
        </div>
    <?php endif; ?>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Barang</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/barang/save" method="POST">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <label for="id_barang" class="col-sm-2 col-form-label">ID Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="id_barang" name="id_barang">
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
                                <input type="text" class="form-control" id="nama_barang" name="nama_barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="merk" class="col-sm-2 col-form-label">Merek Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="merk" name="merk">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga_beli" class="col-sm-2 col-form-label">Harga Beli</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="harga_beli" name="harga_beli">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="harga_jual" class="col-sm-2 col-form-label">Harga jual</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="harga_jual" name="harga_jual">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="satuan_barang" class="col-sm-2 col-form-label">Satuan Barang</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="satuan_barang" name="satuan_barang">
                                    <option>Pilih Satuan</option>
                                    <option value="PCS">PCS</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="stok" name="stok">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tgl_input" class="col-sm-2 col-form-label">Tanggal Input</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="tgl_input" name="tgl_input" readonly>
                            </div>
                        </div>
                        <br>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Insert Data</button>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow my-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>ID Barang</th>
                            <th>Kategori</th>
                            <th>Nama Barang</th>
                            <th>Merek</th>
                            <th>Harga Jual</th>
                            <th>Satuan Barang</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1; ?>
                        <?php foreach ($barang as $b) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $b['id_barang']; ?></td>
                                <td><?= $b['id_kategori']; ?></td>
                                <td><?= $b['nama_barang']; ?></td>
                                <td><?= $b['merk']; ?></td>
                                <td><?= $b['harga_jual']; ?></td>
                                <td><?= $b['satuan_barang']; ?></td>
                                <td><?= $b['stok']; ?></td>
                                <td>
                                    <a class="btn btn-primary" href="/barang/<?= $b['id_barang'];; ?>">Details</a>
                                    <a class="btn btn-warning" href="/barang/edit/<?= $b['id_barang']; ?>">Ubah</a>
                                    <form action="/barang/<?= $b['id_barang']; ?>" method="POST">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<div class="content"></div>
<?= $this->endSection(); ?>