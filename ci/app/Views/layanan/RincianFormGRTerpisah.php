<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/RincianFormGr.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
    <div class="formbg">
        <h1>Rincian Booking Grooming Terpisah</h1>
        <br>
        <table align="center">
            <tr>
                <td width="254px">Nama</td>
                <td width="35px" align="center">:</td>
                <td><?= $formSubmission['nama'] ?></td>
                <!-- <td width="619px">Meilani</td> -->
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td align="center">:</td>
                <td><?= $formSubmission['nomor_hp'] ?></td>
                <!-- <td>Kitty</td> -->
            </tr>
            <tr>
                <td>Nama Hewan</td>
                <td align="center">:</td>
                <td><?= $formSubmission['nama_hewan'] ?></td>
                <!-- <td>Kitty</td> -->
            </tr>
            <tr>
                <td>Spesies Hewan</td>
                <td align="center">:</td>
                <td><?= $formSubmission['spesies_hewan'] ?></td>
                <!-- <td>Kucing</td> -->
            </tr>
            <tr>
                <td>Ras Hewan</td>
                <td align="center">:</td>
                <td><?= $formSubmission['ras_hewan'] ?></td>
                <!-- <td>Persia</td> -->
            </tr>
            <tr>
                <td>Berat Hewan</td>
                <td align="center">:</td>
                <td><?= $formSubmission['berat_hewan'] ?></td>
                <!-- <td>3 kg 200 gram</td> -->
            </tr>
            <tr>
                <td>Tanggal Booking</td>
                <td align="center">:</td>
                <td><?= $formSubmission['tanggal_booking'] ?></td>
                <!-- <td>24/11/2023</td> -->
            </tr>
            <tr>
                <td>Waktu Booking</td>
                <td align="center">:</td>
                <td><?= $formSubmission['waktu_booking'] ?></td>
                <!-- <td>10:00</td> -->
            </tr>
            <tr>
                <td>Layanan Grooming</td>
                <td align="center">:</td>
                <td><?= $formSubmission['layanan_grooming'] ?></td>
                <!-- <td>10:00</td> -->
            </tr>
        </table>
        <br>
        <table align="center">
            <tr>
                <td align="center" style="background-color: #fffcfc;" width="532px">Jenis Layanan</td>
                <td align="center" style="background-color: #fffcfc;" width="377px">Harga</td>
            </tr>
            <tr>
                <td align="right" style="background-color: #fffcfc; padding-left: 10px;" width="532px"><?= $formSubmission['layanan_grooming'] ?></td>
                <td style="background-color: #fffcfc; padding-left: 10px;" width="377px">Rp <?= number_format($price, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td align="right" style="background-color: #e5e4e4; padding-right: 10px;" width="532px">Subtotal</td>
                <td style="background-color: #e5e4e4; padding-left: 10px;" width="377px">Rp <?= number_format($price, 0, ',', '.') ?></td>
            </tr>
            <tr>
                <td align="right" style="background-color: #e5e4e4; padding-right: 10px;" width="532px">Biaya Admin</td>
                <td style="background-color: #e5e4e4; padding-left: 10px;" width="377px">Rp 5.000</td>
            </tr>
            <tr>
                <td align="right" style="background-color: #d9d9d9; padding-right: 10px;" width="532px">Estimasi Pembayaran</td>
                <td style="background-color: #d9d9d9; padding-left: 10px;" width="377px">Rp <?= number_format($totalPrice, 0, ',', '.') ?></td>
            </tr>
        </table>
        <br><br>
        <table align="center">
            <tr>
                <td><button type="button" class="booking"><a href="<?= site_url('MyOrderController/index') ?>">
                    <span class="Booking_text"><b>Booking</b></a></span>
                </button></td>
            </tr>
        </table>
        <br><br><br><br>
    </body>
</html>