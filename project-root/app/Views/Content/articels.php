<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <title> Pettopia </title>
    <link rel="stylesheet" type="text/css" href="css\Articles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
</head>

<body>
    <!-- Navbar -->
    <div class="header">
        <div class="logo">
            <img src="<?= base_url('image/') ?>Navbar\Logo.png" alt="">
        </div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Services <i class="fas fa-caret-down"></i></a>
                <div class="dropdown__menu">
                    <ul>
                        <li><a href="Penitipanhewan.html">Penitipan Hewan</a></li>
                        <li><a href="Groominghewan.html">Grooming Hewan</a></li>
                        <li><a href="Dokterhewan.html">Dokter Hewan</a></li>
                        <li><a href="Produk.html">Produk</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="Articles.html">Articles</a></li>
            <li><a href="Promotion.html">Promotion</a></li>
            <li><a href="Myorder.html">My Order</a></li>
        </ul>
        <div class="hkiri">
            <div class="keranjang">
                <a href="Keranjang.html"> <img src="<?= base_url('image/') ?>Navbar\Keranjang.png"> </a>
            </div>
            <div class="login">
                <a href="<?= site_url('auth/logout'); ?>"> <img src="<?= base_url('image/') ?>Navbar\profil.png" alt=""> </a>
            </div>
        </div>
    </div>
    <!-- Navbar -->

    <section class="Articles">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,256L34.3,240C68.6,224,137,192,206,181.3C274.3,171,343,181,411,208C480,235,549,277,617,288C685.7,299,754,277,823,256C891.4,235,960,213,1029,208C1097.1,203,1166,213,1234,234.7C1302.9,256,1371,288,1406,304L1440,320L1440,0L1405.7,0C1371.4,0,1303,0,1234,0C1165.7,0,1097,0,1029,0C960,0,891,0,823,0C754.3,0,686,0,617,0C548.6,0,480,0,411,0C342.9,0,274,0,206,0C137.1,0,69,0,34,0L0,0Z">
            </path>
        </svg>
        <div class="content">
            <div class="card">
                <img src="<?= base_url('image/') ?>Artikel\A1.png">
                <z>Tips Membuat Kucing Nyaman di Kandang</z>
                <button class="button"><a href="Artikel1.html"><b>Read More...</b></a></button>
                <p> - 1 November 2023 - By Pettopia - </p>
            </div>
            <div class="card">
                <img src="<?= base_url('image/') ?>Artikel\A2.png" width="300px">
                <z>Cara Ampuh Mengatasi Kutu Anjing Sampai Tuntas</z>
                <button class="button"><a href="Artikel2.html"><b>Read More...</b></a></button>
                <p> - 2 November 2023 - By Pettopia - </p>
            </div>
            <div class="card">
                <img src="<?= base_url('image/') ?>Artikel\A3.png">
                <z>Cara Mengatasi Ikan Hias Akuarium yang sedang Stress</z>
                <button class="button"><a href="Artikel3.html"><b>Read More...</b></a></button>
                <p> - 3 November 2023 - By Pettopia - </p>
            </div>
        </div>
        <div class="content1">
            <div class="card1">
                <img src="<?= base_url('image/') ?>Artikel\A4.png">
                <z>7 Ciri Hewan Peliharaan Terkena Rabies</z>
                <button class="button"><a href="Artikel4.html"><b>Read More...</b></a></button>
                <p> - 4 November 2023 - By Pettopia - </p>
            </div>
            <div class="card1">
                <img src="<?= base_url('image/') ?>Artikel\A5.png">
                <z>Ternyata Karakter Seseorang Bisa Dilihat <br />
                    dari Hewan Peliharaanya Lho!</z>
                <button class="button"><a href="Artikel5.html"><b>Read More...</b></a></button>
                <p> - 5 November 2023 - By Pettopia - </p>
            </div>
            <div class="card1">
                <img src="<?= base_url('image/') ?>Artikel\A6.png">
                <z>Cara Memperkenalkan Hewan Peliharaan
                    <br /> Pada Bayi
                </z>
                <button class="button"><a href="Artikel5.html"><b>Read More...</b></a></button>
                <p> - 6 November 2023 - By Pettopia - </p>
            </div>
    </section>
</body>

</html>