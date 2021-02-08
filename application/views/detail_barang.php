<div class="container">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
            <div class="row">
                <div class="col-md-4">
                    <img src="<?= base_url() . '/uploads/' . $brg->gambar ?>" alt="" class="card-img-top">
                </div>
                <div class="col-md-8">
                    <table class="table ">
                        <tr>
                            <td>Nama Produk</td>
                            <td>
                                <strong><?= $brg->nama_brg ?></strong>
                            </td>
                        </tr>
                        <tr>
                            <td>Kode</td>
                            <td>
                                <strong><?= $brg->kode ?></strong>
                            </td>
                        </tr>
                         <tr>
                            <td>Ukuran</td>
                            <td>
                                <strong><?= $brg->ukuran ?></strong>
                            </td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>
                                <strong><?= $brg->keterangan ?></strong>
                            </td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>
                                <strong><?= $brg->kategori ?></strong>
                            </td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td>
                                <strong><?= $brg->stok ?></strong>
                            </td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td>
                                <div class="btn btn-success btn-sm">
                                    <strong>Rp. <?= number_format($brg->harga, 0, ',', '.') ?></strong>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-primary btn-sm">Tambah Ke Keranjang</div>') ?>
                    <?php echo anchor('berkat', '<div class="btn btn-secondary btn-sm">Kembali</div>') ?>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</div>