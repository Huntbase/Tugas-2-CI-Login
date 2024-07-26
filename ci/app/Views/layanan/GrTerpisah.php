<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/JenisGrooming.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
        <h1>LAYANAN TERPISAH</h1>
        <table align="center">
            <tr>
                <td width="500px" rowspan="4"><div class="gambar">
                    <div><img src="/img/Images/layananterpisahcat.png"></div>
                    <div><img src="/img/Images/layananterpisahdog.png"></div>
                </div>
                </td>
                <td width="550px" colspan="3" valign="bottom"><div class="keterangan">
                    Kami juga menawarkan beberapa layanan terpisah yang dapat Anda pesan sesuai dengan kebutuhan hewan peliharaan Anda. 
                    Layanan yang kami tawarkan meliputi cukur lion cut dan stylish, pembersihan gigi, pengguntingan kuku, pengobatan kulit, dan treatment gimbal. 
                    Anda dapat memilih salah satu layanan yang paling Anda dan hewan peliharaan Anda butuhkan!
                </div></td>
            </tr>
            <tr>
                <td colspan=2 align="right"><button type="Harga"><a href="#daftarharga">
                    <span class="Harga_text" id="daftarharga">Lihat Daftar Harga</a>
                </button></td>
                <td colspan=2 align="left"><button type="Booking"><a href="<?= site_url('FormGRTerpisahController/index') ?>">
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
                <th width="300px">Spesies Hewan</th>
                <th width="247px">Jenis Layanan</th>
                <th width="300px">Berat</th>
                <th width="300px">Harga</th>
            </tr>
            <tr class="isitabel">
                    <td rowspan=8>Kucing</td>
                    <td rowspan=2>Cukur Lion Cut</td>
            <?php foreach ($hargagrterpisah2 as $harga) : 
                if (in_array($harga['kategori_binatang_id'], ['K']) && $harga['layanan_grooming'] == 'Cukur Lion Cut') : 
            ?>
                    <td class="isitabel"><?= $harga['berat']; ?></td>
                    <td class="isitabel"><?= $harga['harga']; ?></td>
                </tr>
            <?php endif; endforeach; ?> 
            <tr class="isitabel">
                    <td rowspan=2>Cukur Stylish</td>
            <?php foreach ($hargagrterpisah2 as $harga) : 
                if (in_array($harga['kategori_binatang_id'], ['K']) && $harga['layanan_grooming'] == 'Cukur Stylish') : 
            ?>
                    <td class="isitabel"><?= $harga['berat']; ?></td>
                    <td class="isitabel"><?= $harga['harga']; ?></td>
                </tr>
            <?php endif; endforeach; ?> 
            <tr class="isitabel">
                    <td rowspan=2>Pembersihan Gigi</td>
            <?php foreach ($hargagrterpisah2 as $harga) : 
                if (in_array($harga['kategori_binatang_id'], ['K']) && $harga['layanan_grooming'] == 'Pembersihan Gigi') : 
            ?>
                    <td class="isitabel"><?= $harga['berat']; ?></td>
                    <td class="isitabel"><?= $harga['harga']; ?></td>
                </tr>
            <?php endif; endforeach; ?> 
            <tr class="isitabel">
                    <td rowspan=2>Pengguntingan Kuku</td>
            <?php foreach ($hargagrterpisah2 as $harga) : 
                if (in_array($harga['kategori_binatang_id'], ['K']) && $harga['layanan_grooming'] == 'Pengguntingan Kuku') : 
            ?>
                    <td class="isitabel"><?= $harga['berat']; ?></td>
                    <td class="isitabel"><?= $harga['harga']; ?></td>
                </tr>
            <?php endif; endforeach; ?>
            
            <tr class="isitabel">
                    <td class="isitabel" rowspan=16>Anjing</td>
                    <td class="isitabel" rowspan=4>Cukur Lion Cut</td>
            <?php foreach ($hargagrterpisah2 as $harga) : 
                if (in_array($harga['kategori_binatang_id'], ['A']) && $harga['layanan_grooming'] == 'Cukur Lion Cut') : 
            ?>
                    <td class="isitabel"><?= $harga['berat']; ?></td>
                    <td class="isitabel"><?= $harga['harga']; ?></td>
                </tr>
            <?php endif; endforeach; ?> 
            <tr class="isitabel">
                    <td rowspan=4>Cukur Stylish</td>
            <?php foreach ($hargagrterpisah2 as $harga) : 
                if (in_array($harga['kategori_binatang_id'], ['A']) && $harga['layanan_grooming'] == 'Cukur Stylish') : 
            ?>
                    <td class="isitabel"><?= $harga['berat']; ?></td>
                    <td class="isitabel"><?= $harga['harga']; ?></td>
                </tr>
            <?php endif; endforeach; ?> 
            <tr class="isitabel">
                    <td rowspan=4>Pembersihan Gigi</td>
            <?php foreach ($hargagrterpisah2 as $harga) : 
                if (in_array($harga['kategori_binatang_id'], ['A']) && $harga['layanan_grooming'] == 'Pembersihan Gigi') : 
            ?>
                    <td class="isitabel"><?= $harga['berat']; ?></td>
                    <td class="isitabel"><?= $harga['harga']; ?></td>
                </tr>
            <?php endif; endforeach; ?> 
            <tr class="isitabel">
                    <td rowspan=4>Pengguntingan Kuku</td>
            <?php foreach ($hargagrterpisah2 as $harga) : 
                if (in_array($harga['kategori_binatang_id'], ['A']) && $harga['layanan_grooming'] == 'Pengguntingan Kuku') : 
            ?>
                    <td class="isitabel"><?= $harga['berat']; ?></td>
                    <td class="isitabel"><?= $harga['harga']; ?></td>
                </tr>
            <?php endif; endforeach; ?>
        </table>
    </body>
</html> 