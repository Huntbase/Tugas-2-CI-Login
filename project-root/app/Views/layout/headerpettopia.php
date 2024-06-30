<!DOCTYPE html>
<html lang="en">

<head>
    <title> Pettopia </title>
    <link rel="stylesheet" type="text/css" href="/css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Imprima&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="\image\Navbar\Logo.png" alt="">
        </div>
        <ul>
            <li><a href="pettopia.html">Home</a></li>
            <li><a href="#">Services <i class="fas fa-caret-down"></i></a>
                <div class="dropdown__menu">
                    <ul>
                        <li><a href="Penitipanhewan.html">Penitipan Hewan</a></li>
                        <li><a href="Groominghewan.html">Grooming Hewan</a></li>
                        <li><a href="Dokterhewan.html">Dokter Hewan</a></li>
                        <li><a href="<?= site_url('HomeControl/index') ?>">Produk</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="Articles.html">Articles</a></li>
            <li><a href="Promotion.html">Promotion</a></li>
            <li><a href="Myorder.html">My Order</a></li>
        </ul>
        <div class="hkiri">
            <div class="keranjang">
                <a href="Keranjang"> <img src="\img\Navbar\Logo.png"> </a>
            </div>
            <div class="login">
                <a href="Login"> <img src="\image\Navbar\profil.png" alt=""> </a>
            </div>
        </div>
    </div>