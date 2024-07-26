<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/PenitipanHewan.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
        <h1>KAMI MELAYANI PENITIPAN KUCING, IKAN, DAN ANJING DENGAN FASILITAS YANG LENGKAP!</h1>
        <h5>*Tiap fasilitas mungkin berbeda tergantung jenis hewan peliharaan anda</h5><br><br>
        <div class="judul">FASILITAS KAMI</div>
        <table height = "300px">
            <tr>
                <th style="padding: 0px 20px"><div class="fasilitas1">
                    <p1>KANDANG</p1><br><br>
                    <f1><img src="/img/Images/kandang.png"></f1><br><br>
                    <k>Kandang yang bersih dan nyaman, dilengkapi AC dan ventilasi yang baik</k1>
                </div></th>
                <th style="padding: 0px 20px"><div class="fasilitas2">
                    <p2>MAKAN</p2><br><br>
                    <f2><img src="/img/Images/makan.png"></f2><br><br>
                    <k>Pemberian makan dengan jadwal dan gizi yang sesuai untuk tiap hewan</k2>
                </div></th>
                <th style="padding: 0px 20px"><div class="fasilitas3">
                    <p3>PLAYGROUND</p3><br><br>
                    <f3><img src="/img/Images/playground.png"></f3><br><br>
                    <k>Tempat bermain luar ruangan agar hewan peliharaan tidak jenuh</k3>
                </div></th>
                <th style="padding: 0px 20px"><div class="fasilitas4">
                    <p4>GROOMING</p4><br><br>
                    <f4><img src="/img/Images/grooming.png"></f4><br><br>
                    <k>Memastikan hewan anda tetap bersih dengan grooming</k4>
                </div></th>
            </tr>
            <tr>
                <td colspan="4" height="20px"></td>
            </tr>
            <tr>
                <td colspan="2" align="right"><button type="Harga"><a href="#daftarharga">
                    <span class="Harga_text" id="daftarharga">Lihat Daftar Harga</a></span>
                </button></td>
                <td colspan="2" align="left"><button type="Booking"><a href="<?= site_url('FormPHController/index') ?>">
                    <span class="Booking_text"><b>Booking!</b></a></span>
                </button></td>
            </tr>
        </table>
        <br>
        <h2>DAFTAR HARGA</h2>
        <table align="center" class="tabelhargaph">
            <tr height="40px" class="headertabel">
                <th width="396px">Berat</th>
                <th width="396px">Harga (Rp)</th>
            </tr>
            <tr height="40px" class="abuabu">
                <td colspan="2">Kucing</td>
            </tr>
            <?php foreach ($daftarhargapenitipan as $harga) : 
                if (in_array($harga['kategori_hewan_id'], ['K'])) : // ID untuk kategori Kucing
            ?>
                <tr class="isitabel">
                    <td><?= $harga['berat']; ?></td>
                    <td><?= $harga['harga']; ?></td>
                </tr>
            <?php endif; endforeach; ?>
            <tr height="40px" class="abuabu">
                <td colspan="2">Ikan</td>
            </tr>
            <?php foreach ($daftarhargapenitipan as $harga) : 
                if (in_array($harga['kategori_hewan_id'], ['I'])) : // ID untuk kategori Kucing
            ?>
                <tr class="isitabel">
                    <td><?= $harga['berat']; ?></td>
                    <td><?= $harga['harga']; ?></td>
                </tr>
            <?php endif; endforeach; ?> 
            <tr height="40px" class="abuabu">
                <td colspan="2">Anjing</td>
            </tr>
            <?php foreach ($daftarhargapenitipan as $harga) : 
                if (in_array($harga['kategori_hewan_id'], ['A'])) : // ID untuk kategori Kucing
            ?>
                <tr class="isitabel">
                    <td><?= $harga['berat']; ?></td>
                    <td><?= $harga['harga']; ?></td>
                </tr>
            <?php endif; endforeach; ?> 
            </tr>
        </table>
    </body>