<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/JenisGrooming.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
        <h1>BASIC GROOMING</h1>
        <table align="center">
            <tr>
                <td width="500px" rowspan="4"><div class="gambar">
                    <div><img src="/img/Images/basicgroomingcat.png"></div>
                    <div><img src="/img/Images/basicgroomingdog.png"></div>
                </div>
                </td>
                <td width="550px" colspan="3" valign="bottom"><div class="keterangan">
                    <i>Basic Grooming</i> adalah salah satu jenis layanan yang kami tawarkan untuk merawat bulu hewan peliharaan Anda. 
                    <i>Basic Grooming</i> ini meliputi layanan seperti pengguntingan kuku, pencukuran/perapihan bulu, pembersihan telinga, 
                    dan pemandian serta pengeringan bulu hewan peliharaan anda. 
                </div></td>
            </tr>
            <tr>
                <td colspan=2 align="right"><button type="Harga"><a href="#daftarharga">
                    <span class="Harga_text" id="daftarharga">Lihat Daftar Harga</a>
                </button></td>
                <td colspan=2 align="left"><button type="Booking"><a href="<?= site_url('FormGRController/index') ?>">
                <span class="Booking_text"><b>Booking!</b></a>
                </button></td>
            </tr>
            <tr height="30px">
                <td align="center" colspan="3">
                    <a class="kembali" id="daftarharga" href="<?= site_url('GroomingController/index') ?>">Lihat Jenis Grooming Lainnya</a>
                </td>
            </tr>
            <tr height="30px">
            </tr>
        </table>
        <br>
        <h1>DAFTAR HARGA</h1>
        <table align="center">
            <tr height="40px" class="headertabel">
                <th width="396px">Berat</th>
                <th width="396px">Harga (Rp)</th>
            </tr>
            <tr height="40px" class="abuabu">
                <td colspan="2">Kucing</td>
            </tr>
            <?php foreach ($hargagrooming as $harga) : 
                if (in_array($harga['kategori_grooming'], ['Basic Grooming']) && in_array($harga['kategori_hewan_id'], ['K'])) : // ID untuk kategori Kucing
            ?>
                <tr class="isitabel">
                    <td><?= $harga['berat']; ?></td>
                    <td><?= $harga['harga']; ?></td>
                </tr>
            <?php endif; endforeach; ?> 
            <!-- <tr height="40px" class="isitabel">
                <td>≤ 5 kg (kecil)</td>
                <td>115.000</td>
            </tr>
            <tr height="40px" class="isitabel">
                <td>> 5 kg (besar)</td>
                <td>140.000</td>
            </tr> -->
            <tr height="40px" class="abuabu">
                <td colspan="2">Anjing</td>
            </tr>
            <?php foreach ($hargagrooming as $harga) : 
                if (in_array($harga['kategori_grooming'], ['Basic Grooming']) && in_array($harga['kategori_hewan_id'], ['A'])) : // ID untuk kategori Kucing
            ?>
                <tr class="isitabel">
                    <td><?= $harga['berat']; ?></td>
                    <td><?= $harga['harga']; ?></td>
                </tr>
            <?php endif; endforeach; ?> 
            <!-- <tr height="40px" class="isitabel">
                <td>≤ 5 kg (kecil)</td>
                <td>130.000</td>
            </tr>
            <tr height="40px" class="isitabel">
                <td>5,1 - 15 kg (sedang)</td>
                <td>150.000</td>
            </tr>
            <tr height="40px" class="isitabel">
                <td>15,1 - 25 kg (besar)</td>
                <td>200.000</td>
            </tr>
            <tr height="40px" class="isitabel">
                <td>> 25,1 kg (ekstra besar)</td>
                <td>220.000</td>
            </tr> -->
        </table>
    </body>
</html> 