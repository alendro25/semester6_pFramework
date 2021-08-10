<?= $this->extend('templates/index'); ?>


<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Data Kategori</h1>
    <table>
        <tr>
            <form action="/kategori/save" method="post">
                <?= csrf_field(); ?>
                <td style="width:15pc;">
                    <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukan Kategori Barang Baru">
                </td>
                <td>
                    <button type="submit" id="tombol-simpan" class="btn btn-primary"> <i class="bi bi-plus"></i> Tambah Kategori Barang</button>
                </td>
            </form>
        </tr>
    </table>

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
                            <th>Kategori</th>
                            <th>Tanggal Input</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($kategori as $k) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $k['nama_kategori']; ?></td>
                                <td><?= $k['updated_at']; ?></td>
                                <td>
                                    <a class="btn btn-warning" href="">Ubah</a>
                                    <a href="/kategori/delete/<?= $k['id_kategori']; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
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