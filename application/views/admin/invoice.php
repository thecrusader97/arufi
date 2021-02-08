<div class="container-fluid">

    <h4>INVOICE PEMESANAN PRODUK</h4>
    <div class="navbar-form">

        <?= form_open('admin/invoice/search'); ?>
        <input type="text" name="keyword" class="form-control" placeholder="cari">
        <button type="submit" class="btn btn-success mt-1">Cari</button>
        <?= form_close(); ?>
    </div>
    <a href="<?= base_url('admin/invoice/print'); ?>" class="btn btn-danger mt-1"><i class="fa fa-print">Print</i></a>
    <table class="table table-border table-hover table-striped mt-2">
        <tr>
            <th>No Pesanan</th>
            <th>Nama Pemesan</th>
            <th>Alamat Kirim</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Bayar</th>
            <th>Detail</th>
            <th>Hapus</th>
        </tr>
        <?php foreach ($invoice as $inv) : ?>
        <tr>
            <td><?= $inv->no_pesanan ?></td>
            <td><?= $inv->nama ?></td>
            <td><?= $inv->alamat ?></td>
            <td><?= $inv->tgl_pesan ?></td>
            <td><?= $inv->batas_bayar ?></td>
            <td><?= anchor('admin/invoice/detail/' . $inv->id, '<div class="btn btn-primary btn-sm">Detail</div>'); ?>
            <td><?= anchor('admin/invoice/hapus_invoice/' . $inv->no_pesanan, '<div class="btn btn-danger btn-sm">Hapus</div>'); ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
</div>
</div>