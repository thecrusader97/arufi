<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Berkat Cake</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">
</head>

<body class="bg-white">
    <div class="container">
        <br>

        <h3>INVOICE PENJUALAN</h3>

        <table class="table table-border">
            <tr>
                <th>No.</th>
                <th>No Pesanan</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Pesan</th>
                <th>Batas Bayar</th>
            </tr>
            <?php
            $no = 1;
            foreach ($invoice as $inv) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $inv->no_pesanan; ?></td>
                <td><?= $inv->nama; ?></td>
                <td><?= $inv->alamat; ?></td>
                <td><?= $inv->tgl_pesan; ?></td>
                <td><?= $inv->batas_bayar; ?></td>
            </tr>

            <?php endforeach; ?>
        </table>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url() ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url() ?>assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url() ?>assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url() ?>assets/js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url() ?>assets/js/demo/chart-pie-demo.js"></script>

    <script>
    window.print();
    </script>
</body>

</html>