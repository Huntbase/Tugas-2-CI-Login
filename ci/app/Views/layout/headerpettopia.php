<!DOCTYPE html>
<html lang="en">

<head>
    <title> Pettopia Indonesia</title>
    <link rel="stylesheet" type = "text/css" href="/css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imprima&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="icon" href="image\Login\LogoOutlineHitam.png" type="image/x-icon">
</head>

<body>
    <div class="navbar">
        <div class="header">
            <div class="logo">
                <img src="<?= base_url("image") ?>/Navbar/Logo.png" alt="">
            </div>
            <ul>
                <li><a href="<?= site_url('pettopia/index') ?>">Home</a></li>
                <li><a href="#">Services <i class="fas fa-caret-down"></i></a>
                    <div class="dropdown__menu">
                        <ul>
                            <li><a href="<?= site_url('PenitipanController/index') ?>">Penitipan Hewan</a></li>
                            <li><a href="<?= site_url('GroomingController/index') ?>">Grooming Hewan</a></li>
                            <li><a href="<?= site_url('DokterController/index') ?>">Dokter Hewan</a></li>
                            <li><a href="<?= site_url('ProdukController/index') ?>">Produk</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="<?= site_url('ArticlesController/index') ?>">Articles</a></li>
                <li><a href="<?= site_url('PromotionController/index') ?>">Promotion</a></li>
                <li><a href="<?= site_url('MyOrderController/index') ?>">My Order</a></li>
            </ul>
            <div class="hkiri">
                <div class="keranjang">
                    <a class="cart" href="<?= base_url('produk/viewCart') ?>">
                        <img src="<?= base_url('image/Navbar/Keranjang.png') ?>" alt="Keranjang">
                        <?php
                        $session = session();
                        $cart = $session->get('cart');
                        $totalItems = $cart ? array_sum($cart) : 0; // Hitung total item di keranjang
                        ?>
                    </a>
                    <span id="cart-count"><?= $totalItems ?></span> <!-- Tampilkan jumlah item di keranjang -->
                </div>
                <div class="login">
                    <a href="<?= site_url('Auth/index') ?>"> <img src="<?= base_url("image") ?>/Navbar/profil.png" alt=""> </a>
                </div>
            </div>
        </div>
    </div>