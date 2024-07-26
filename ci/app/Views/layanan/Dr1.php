<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/JenisDokter.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
        <h1>KESEHATAN</h1>
        <table align="center">
            <tr>
                <td width="500px" rowspan="4"><div class="gambar">
                    <div><img src="/img/Images/kesehatancat.png"></div>
                    <div><img src="/img/Images/kesehatandog.png"></div>
                </div>
                </td>
                <td width="550px" colspan="3" valign="bottom"><div class="keterangan">
                    Cek kesehatan atau konsultasi kesehatan hewan peliharaan Anda di klinik terdekat kami. 
                    Klinik kami didukung oleh tenaga medis profesional untuk memberikan perawatan terbaik untuk hewan peliharaan anda. 
                    Jenis layanan kesehatan meliputi pengecekan kesehatan, operasi, hingga tindakan untuk melahirkan.
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
        <h1>DAFTAR HARGA*</h1>
        <table align="center">
            <tr height="40px" class="headertabel">
                <th width="337px" rowspan="2">Jenis Tindakan</th>
                <th width="247px" colspan="2">Kucing</th>
                <th width="499px" colspan="4">Anjing</th>
            </tr>
            <tr height="40px" class="abuabu">
                <td width="121px">≤ 5 kg</td>
                <td width="121px">> 5 kg</td>
                <td width="121px">≤ 5 kg</td>
                <td width="121px">5,1 - 15 kg</td>
                <td width="121px">15,1 kg - 25 kg</td>
                <td width="121px">> 25 kg</td>
            </tr>
            <?php foreach ($hargadrkesehatan as $harga) : ?>
                <tr  height="40px" class="isitabel">
                    <td><?= $harga['jenis_tindakan']; ?></td>
                    <td><?= number_format($harga['kurang_5_kg_kucing'], 0, ',', '.') ?></td>
                    <td><?= number_format($harga['lebih_5_kg_kucing'], 0, ',', '.') ?></td>
                    <td><?= number_format($harga['kurang_5_kg_anjing'], 0, ',', '.') ?></td>
                    <td><?= number_format($harga['5_15_kg_anjing'], 0, ',', '.') ?></td>
                    <td><?= number_format($harga['15_25_anjing'], 0, ',', '.') ?></td>
                    <td><?= number_format($harga['lebih_25_anjing'], 0, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?> 
        </table>
        <h5>*Harga di atas belum termasuk dengan obat-obatan yang mungkin akan digunakan selama tindakan</h5>
    </body>
</html> 