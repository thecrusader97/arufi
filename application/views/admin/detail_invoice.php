<div class="container-fluid">
    <h4>Detail Pesanan <div class="btn btn-primary btn-sm">No invoice : <?= $invoice->id ?></div>
    </h4>

    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>ID Barang</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Sub-total</th>
        </tr>

        <?php
        $total = 0;
        foreach ($pesanan as $psn) :
            $subtotal = $psn->jumlah * $psn->harga;
            $total += $subtotal;
            ?>
        <tr>
            <th><?= $psn->id_brg ?></th>
            <th><?= $psn->nama_brg ?></th>
            <th><?= $psn->jumlah ?></th>
            <th><?= number_format($psn->harga, 0, ',', '.') ?></th>
            <th><?= number_format($subtotal, 0, ',', '.') ?></th>
        </tr>
        <?php endforeach; ?>
        <tr class="font-weight-bold">
            <th colspan="4" align="right">Grand Total</th>
            <th align="right"><?= number_format($total, 0, ',', '.'); ?></th>
        </tr>
    </table>
    <a href="<?= base_url('admin/invoice/index') ?>">
        <div class="btn btn-sm btn-primary">Kembali</div>
    </a>
</div>