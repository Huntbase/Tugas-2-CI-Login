<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/RincianFormPHCard.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
        <div class="formbg"><br>
            <h1 class="judulrincian">Rincian Booking Penitipan Hewan</h1>
            <br>
            <table align="center">
                <tr>
                    <td width="254px">Nama</td>
                    <td width="35px" align="center">:</td>
                    <td><?= $formSubmission['nama'] ?></td>
                    <!-- <td width="619px">Melani</td> -->
                </tr>
                <tr>
                    <td>Nomor HP</td>
                    <td align="center">:</td>
                    <td><?= $formSubmission['nomor_hp'] ?></td>
                    <!-- <td>Kani</td> -->
                </tr>
                <tr>
                    <td>Nama Hewan</td>
                    <td align="center">:</td>
                    <td><?= $formSubmission['nama_hewan'] ?></td>
                    <!-- <td>Kani</td> -->
                </tr>
                <tr>
                    <td>Spesies Hewan</td>
                    <td align="center">:</td>
                    <td><?= $formSubmission['spesies_hewan'] ?></td>
                    <!-- <td>Ikan</td> -->
                </tr>
                <tr>
                    <td>Ras Hewan</td>
                    <td align="center">:</td>
                    <td><?= $formSubmission['ras_hewan'] ?></td>
                    <!-- <td>Mutiara</td> -->
                </tr>
                <tr>
                    <td>Berat Hewan</td>
                    <td align="center">:</td>
                    <td><?= $formSubmission['berat_hewan'] ?></td>
                    <!-- <td>100 gram</td> -->
                </tr>
                <tr>
                    <td>Tanggal Check In</td>
                    <td align="center">:</td>
                    <td><?= $formSubmission['tanggal_checkin'] ?></td>
                    <!-- <td>11/03/2023</td> -->
                </tr>
                <tr>
                    <td>Tanggal Check Out</td>
                    <td align="center">:</td>
                    <td><?= $formSubmission['tanggal_checkout'] ?></td>
                    <!-- <td>11/06/2023</td> -->
                </tr>
                <tr>
                    <td>Total Hari</td>
                    <td align="center">:</td>
                    <td><?= $jumlah_hari ?></td>
                    <!-- <td>3 hari</td> -->
                </tr>
            </table>
            <br>
            <table align="center">
                <tr>
                    <td align="center" style="background-color: #b1acac;" width="532px"><b>Jenis Layanan</b></td>
                    <td align="center" style="background-color: #b1acac;" width="377px"><b>Harga</b></td>
                </tr>
                <tr>
                    <td align="right" style="background-color: #f5f5f5; padding-left: 10px;" width="532px">Penitipan Hewan (<?= $jumlah_hari ?> Hari)</td>
                    <td style="background-color: #f5f5f5; padding-left: 10px;" width="377px">Rp <?= number_format($price, 0, ',', '.') ?></td>
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
                    <td colspan=3><button type="button" class="booking"><a href="<?= site_url('MyOrderController/index') ?>">
                        <span class="Booking_text"><b>Booking</b></a></span>
                    </button></td>
                </tr>
            </table>
        </div>
        <br><br><br><br>
    </body>
</html>