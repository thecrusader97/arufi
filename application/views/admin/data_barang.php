<div class="container-fluid">
    <button class="btn btn-primary btn-sm mb-3" data-toggle="modal" data-target="#tambah_barang"><i
            class="fa fa-plus fa-sm"> Tambah
            Barang</i></button>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Keterangan</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="3">Aksi</th>
        </tr>

        <?php
        $no = 1;
        foreach ($barang as $brg) : ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $brg->nama_brg; ?></td>
            <td><?= $brg->keterangan; ?></td>
            <td><?= $brg->kategori; ?></td>
            <td><?= $brg->harga; ?></td>
            <td><?= $brg->stok; ?></td>

            <td>
                <?php echo anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-success btn-sm"><i class="fas fa-edit"></i></div>'); ?>
            </td>
            <td>
                <?php echo anchor('admin/data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_barang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">FORM TAMBAH PRODUK</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url() . 'admin/data_barang/tambah_aksi' ?>" method="post"
                enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nama_brg">Nama Barang</label>
                        <input type="text" name="nama_brg" id="nama_brg" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control" name="kategori" id="kategori">
                            <option value="kue">Kue</option>
                            <option value="roti">Roti</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="text" name="harga" id="harga" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" name="stok" id="stok" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label><br>
                        <input type="file" name="gambar" id="gambar" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>