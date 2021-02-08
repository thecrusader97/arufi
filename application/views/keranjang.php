<br><br><br>
<div class="container">
    <h4>KERANJANG BELANJA</h4>
    <table class="table table-border table-striped table-hover">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Kode</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Sub Total</th>
        </tr>

        <?php $no = 0;
        foreach ($this->cart->contents() as $items) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $items['name'] ?></td>
            <td><?php echo $items['qty'] ?></td>
            <td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.') ?></td>
            <td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.') ?></td>
        </tr>
        <?php endforeach; ?>
        <tr class="font-weight-bold">
            <td colspan="4">Total</td>
            <td align="right">Rp. <?= number_format($this->cart->total(), 0, ',', '.') ?></td>
        </tr>
    </table>
    <div align="right">
        <a href="<?= base_url('dashboard/pembayaran') ?>">
            <div class="btn btn-sm btn-success">Bayar Sekarang</div>
        </a>
        <a href="<?= base_url('berkat/produk') ?>">
            <div class="btn btn-sm btn-primary">Lanjutkan Belanja</div>
        </a>
        <a href="<?= base_url('dashboard/hapus_keranjang') ?>">
            <div class="btn btn-sm btn-danger">Hapus Keranjang</div>
        </a>
        <a class="btn btn-primary" onclick="window.print();"><i class="fa fa-print"></i> Print Keranjang</a>
    </div>
</div>