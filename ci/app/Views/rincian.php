<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style3.css">
    <script src="https://kit.fontawesome.com/0ba96f7342.js" crossorigin="anonymous"></script>
</head>

<body>
    <h1>Rincian Produk</h1>
    <div class="image-container2">
        <div class="image-box">
            <a class="back" href="<?= base_url('ProdukController/index') ?>">
                <img src="/img/arrow.png"> Kembali ke Daftar Produk
            </a>
            <br>
            <?php if ($product) : ?>
                <?php if ($product['image']) : ?>
                    <img class="gambar" src="<?= base_url('uploads/' . $product['image']) ?>" alt="<?= $product['name'] ?>">
                <?php endif; ?>
                <div class="box">
                    <div class="text1"><b><?= $product['name'] ?></b></div>
                    <h2 class="price">Price: Rp <?= number_format($product['price'], 0, ',', '.') ?></h2> 
                    <p class="deskripsi">Deskripsi: <?= $product['description'] ?></p>
                </div>
                <div class="keranjang2">
                    <a href="<?= base_url('ProdukController/addToCart/' . $product['id']) ?>">
                        <img src="/img/CART.png"> Masukkan Keranjang
                    </a>
                </div>
                <div class="buy">
                    <a href="">Beli Sekarang</a>
                </div>
                <?php else : ?>
                    <p>Produk tidak ditemukan.</p>
            <?php endif; ?>
            <br>
        </div>
    </div>
</body>

</html>