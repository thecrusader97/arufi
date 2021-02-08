<br>
<div class="container mt-5">
    <h3 class="mt-3">KATEGORI : Semua produk</h3>
    <hr align="left">
    <div class="row">
   

    </div>
    <div class="row mt-4">
        <?php foreach ($barang as $brg) : ?>
        <div class="card ml-3 mb-3" style="width: 16rem;">
            <img src="<?= base_url() . '/uploads/' . $brg->gambar ?>" class="card-img-top" alt="..." height="200px">
            <div class="card-body">
                <h5 class="card-title"><?= $brg->nama_brg ?></h5>
                 <small><?= $brg->stok ?></small><br>
                <small><?= $brg->keterangan ?></small><br>
                <span class="badge badge-success mb-3">Rp. <?= number_format($brg->harga, 0, ',', '.') ?></span><br>
                <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-primary btn-sm">Tambah Ke Keranjang</div>') ?>
                <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-success btn-sm">Detail</div>') ?>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>