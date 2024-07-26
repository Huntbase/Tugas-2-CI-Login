<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/JenisDokter.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
        <h1>VAKSINASI</h1>
        <table align="center">
            <tr>
                <td width="500px" rowspan="4"><div class="gambar">
                    <div><img src="/img/Images/vaksinasicat.png"></div>
                    <div><img src="/img/Images/vaksinasifish.png"></div>
                </div>
                </td>
                <td width="550px" colspan="3" valign="bottom"><div class="keterangan">
                    Vaksinasi merupakan hal yang sangat penting untuk mendukung kesehatan hewan peliharaan Anda. 
                    Pettopia menyediakan berbagai macam jenis vaksinasi untuk kucing, ikan, dan anjing yang terjamin aman 
                    dan lengkap. 
                </div></td>
            </tr>
            <tr height="60">
                <td align="right" width="270px"><button type="Harga"><a href="#daftarharga">
                    Lihat Daftar Harga</a>
                </button></td>
                <td width="10px"></td>
                <td align="left"><button type="Booking"><a href="<?= site_url('FormDrhController/index') ?>">
                    Booking!</a>
                </button></td>
            </tr>
            <tr height="30px">
                <td align="center" colspan="3">
                    <a class="kembali" id="daftarharga" href="<?= site_url('DokterController/index') ?>">Lihat Jenis Layanan Dokter Lainnya</a>
                </td>
            </tr>
            <tr height="30px">
            </tr>
        </table>
        <br>
        <h1>DAFTAR HARGA</h1>
        <table align="center">
            <tr height="40px" class="headertabel">
                <th width="350px">Jenis Vaksin</th>
                <th width="350px">Rentang Usia</th>
                <th width="350px">Harga (Rp)</th>
            </tr>
            <tr height="40px" class="abuabu">
                <td colspan="3">Kucing</td>
            </tr>
            <?php foreach ($hargadrvaksinasi as $harga) : 
                if (in_array($harga['kategori_binatang_id'], ['K'])) : 
            ?>
                <tr  height="40px" class="isitabel">
                    <td><?= $harga['jenis_vaksin']; ?></td>
                    <td><?= $harga['rentang_usia']; ?></td>
                    <td><?= number_format($harga['harga'], 0, ',', '.') ?></td>
                </tr>
            <?php endif; endforeach; ?> 
            <tr height="40px" class="abuabu">
                <td colspan="3">Ikan</td>
            </tr>
            <?php foreach ($hargadrvaksinasi as $harga) : 
                if (in_array($harga['kategori_binatang_id'], ['I'])) : 
            ?>
                <tr  height="40px" class="isitabel">
                    <td><?= $harga['jenis_vaksin']; ?></td>
                    <td><?= $harga['rentang_usia']; ?></td>
                    <td><?= number_format($harga['harga'], 0, ',', '.') ?></td>
                </tr>
            <?php endif; endforeach; ?> 
            <tr height="40px" class="abuabu">
                <td colspan="3">Anjing</td>
            </tr>
            <?php foreach ($hargadrvaksinasi as $harga) : 
                if (in_array($harga['kategori_binatang_id'], ['A'])) : 
            ?>
                <tr  height="40px" class="isitabel">
                    <td><?= $harga['jenis_vaksin']; ?></td>
                    <td><?= $harga['rentang_usia']; ?></td>
                    <td><?= number_format($harga['harga'], 0, ',', '.') ?></td>
                </tr>
            <?php endif; endforeach; ?> 
        </table>
    </body>
</html> 