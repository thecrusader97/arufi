<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Arufi.Collection</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Ibarra+Real+Nova&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


    <!-- Custom styles for this template-->
    <link href="<?= base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url('berkat/index') ?>"><i class=" "> Arufi.Collection</i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('berkat/index') ?>">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('berkat/profil') ?>">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('berkat/produk') ?>">Produk</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Keranjang Pemesanan</a>
                    </li> -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <?php
                        $keranjang = 'Keranjang Belanja: ' . $this->cart->total_items() . ' items';
                        ?>
                        <?php echo anchor('dashboard/detail_keranjang', $keranjang) ?>
                    </li>

                </ul>
                <div class="topbar-divider d-none d-sm-block"></div>
                <ul class="nav navbar-nav navbar-right">
                    <?php if ($this->session->userdata('username')) { ?>
                    <li>
                        <div>Selamat datang <?= $this->session->userdata('username'); ?> </div>
                    </li>
                    <li class="ml-2">
                        <?= anchor('auth/logout', '<div class="btn btn-primary">Logout</div>') ?>
                    </li>
                    <?php } else { ?>
                    <li class="ml-2"><?= anchor('auth/login', '<div class="btn btn-light">Login</div>') ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>