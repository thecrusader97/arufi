<div class="container-fluid">
    <h3><i class="fas fa-edit"></i> EDIT DATA BARANG</h3>
    <?php foreach ($barang as $brg) : ?>
    <form action="<?= base_url() . 'admin/data_barang/update' ?>" method="post">
        <div class="form-group">
            <label for="nama_brg">Nama Barang</label>
            <input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg ?>">
        </div>
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <input type="hidden" name="id_brg" class="form-control" value="<?= $brg->id_brg ?>">
            <input type="text" name="keterangan" class="form-control" value="<?= $brg->keterangan ?>">
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
            <input type="text" name="harga" class="form-control" value="<?= $brg->harga ?>">
        </div>
        <div class="form-group">
            <label for="stok">Stok</label>
            <input type="text" name="stok" class="form-control" value="<?= $brg->stok ?>">
        </div>
        <button type="submit" class="btn btn-primary btn-sm mt-3">Simpan</button>
    </form>
    <?php endforeach; ?>
</div>