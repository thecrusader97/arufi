<div class="container">
    <br>
    <br>
    <h4 class="mt-3">KATEGORI : <strong>Roti</strong></h4>
    <hr align="left">
    <div class="row">
        <?php foreach ($roti as $rt) : ?>
        <div class="col-lg-3 col-sm-6 col-md-4 mb-4 text-center">
            <div class="card" style="width: 14rem;">
                <img class="card-img-top" src="<?= base_url() . '/uploads/' . $rt->gambar ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-uppercase"><?= $rt->nama_brg ?></h5>
                    <p class="card-text"><?= $rt->ukuran ?></h5>
                          <p class="card-text">kode : <?= $rt->kode ?></h5>
                    <p class="card-text">Rp. <?= number_format($rt->harga, 0, ',', '.') ?></p>
                    <a href="#" class="btn btn-outline-success">Beli Sekarang</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <a href="<?= base_url('berkat/produk') ?>" class="btn btn-primary text-white">Kembali</a>

</div>