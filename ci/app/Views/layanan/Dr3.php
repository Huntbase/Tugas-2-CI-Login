<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/JenisDokter.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
        <h1>STERILISASI</h1>
        <table align="center">
            <tr>
                <td width="500px" rowspan="4"><div class="gambar">
                    <div><img src="/img/Images/sterilisasicat.png"></div>
                    <div><img src="/img/Images/sterilisasidog.png"></div>
                </div>
                </td>
                <td width="550px" colspan="3" valign="bottom"><div class="keterangan">
                    Sterilisasi adalah prosedur bedah untuk mengangkat organ reproduksi bagi kucing maupun anjing, 
                    untuk mengontrol populasi dan menurunkan risiko munculnya penyakit dalam. Kami menyediakan layanan 
                    sterilisasi untuk kucing dan anjing yang cepat dan aman.
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
                <th width="396px" rowspan="2">Jenis Hewan</th>
                <th width="396px" colspan="2">Harga (Rp)</th>
            </tr>
            <tr class="headertabel">
                <th>Jantan</th>
                <th>Betina</th>
            </tr>
            <tr height="40px" class="abuabu">
                <td colspan="3">Kucing</td>
            </tr>
            <?php foreach ($hargadrsterilisasi as $harga) : 
                if (in_array($harga['kategori_hewan_id'], ['K'])) : 
            ?>
                <tr  height="40px" class="isitabel">
                    <td><?= $harga['jenis_hewan']; ?></td>
                    <td><?= number_format($harga['jantan'], 0, ',', '.') ?></td>
                    <td><?= number_format($harga['betina'], 0, ',', '.') ?></td>
                </tr>
            <?php endif; endforeach; ?> 
            <tr height="40px" class="abuabu">
                <td colspan="3">Anjing</td>
            </tr>
            <?php foreach ($hargadrsterilisasi as $harga) : 
                if (in_array($harga['kategori_hewan_id'], ['A'])) : 
            ?>
                <tr  height="40px" class="isitabel">
                    <td><?= $harga['jenis_hewan']; ?></td>
                    <td><?= number_format($harga['jantan'], 0, ',', '.') ?></td>
                    <td><?= number_format($harga['betina'], 0, ',', '.') ?></td>
                </tr>
            <?php endif; endforeach; ?>
        </table>
    </body>
</html> 