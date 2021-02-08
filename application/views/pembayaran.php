<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total += $item['subtotal'];
                    }
                    echo "Total belanja Anda : " . number_format($grand_total, 0, ',', '.');

                    ?>
            </div>
            <h3 class="mt-5">Input Alamat Pengiriman dan Pembayaran</h3>

            <form action="<?= base_url() ?>dashboard/proses_pesanan" method="post">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input class="form-control" type="text" name="nama" id="nama" placeholder="Masukkan nama lengkap">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input class="form-control" type="text" name="alamat" id="alamat" placeholder="Alamat lengkap">
                </div>
                <div class="form-group">
                    <label for="no_tlp">Nomor Telpon</label>
                    <input class="form-control" type="text" name="no_tlp" id="no_tlp" placeholder="08xxxxxxxx">
                </div>
                <div class="form-group">
                    <label for="kurir">Kurir</label>
                    <select class="form-control" name="kurir" id="kurir">
                        <option value="">JNE</option>
                        <option value="">J&T</option>
                        <option value="">POS</option>
                        <option value="">Wahana</option>
                        <option value="">Go-Send</option>
                        <option value="">Grab</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="norek">Pilih Bank</label>
                    <select class="form-control" name="norek" id="norek">
                        <option value="">BRI - XXXXXXXX</option>
                        <option value="">BNI - XXXXXXXX</option>
                        <option value="">Mandiri - XXXXXXXX</option>
                        <option value="">OVO - XXXXXXXX</option>
                    </select>
                </div>
                <input type="hidden" id="no_pesanan" name="no_pesanan" value="<?= rand(1000, 9999) ?>">

                <button type="submit" class="btn btn-sm btn-primary mb-5">Pesan</button>
                <a href="<?= base_url('dashboard/print_invoice'); ?>" class="btn btn-sm btn-primary mb-5"><i class="fa fa-print">Print</i></a>
            </form>
            <?php
        } else {
            echo "Keranjang Anda masih kosong.";
        }
        ?>
        </div>
        <div class="col-md-2 mb-5"></div>
    </div>
</div>