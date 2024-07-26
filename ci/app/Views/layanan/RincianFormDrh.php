<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/RincianFormDrh.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
        <div class="formbg"><br>
            <h1 class="judulrincian">Rincian Booking Dokter Hewan</h1>
            <br>
            <table align="center">
                <tr>
                    <td width="254px">Nama</td>
                    <td width="35px" align="center">:</td>
                    <td><?= $formSubmission['nama'] ?></td>
                    <!-- <td width="619px">Yahya</td> -->
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
                    <!-- <td>Dogi</td> -->
                </tr>
                <tr>
                    <td>Spesies Hewan</td>
                    <td align="center">:</td>
                    <td><?= $formSubmission['spesies_hewan'] ?></td>
                    <!-- <td>Anjing</td> -->
                </tr>
                <tr>
                    <td>Ras Hewan</td>
                    <td align="center">:</td>
                    <td><?= $formSubmission['ras_hewan'] ?></td>
                    <!-- <td>Mini Pom</td> -->
                </tr>
                <tr>
                    <td>Berat Hewan</td>
                    <td align="center">:</td>
                    <td><?= $formSubmission['berat_hewan'] ?></td>
                    <!-- <td>2 kg 100 gram</td> -->
                </tr>
                <tr>
                    <td>Jenis Layanan</td>
                    <td align="center">:</td>
                    <td><?= $formSubmission['jenis_layanan'] ?></td>
                </tr>
                <tr>
                    <td>Tanggal Booking</td>
                    <td align="center">:</td>
                    <td><?= $formSubmission['tanggal_booking'] ?></td>
                    <!-- <td>20/11/2023</td> -->
                </tr>
                <tr>
                    <td>Waktu Booking</td>
                    <td align="center">:</td>
                    <td><?= $formSubmission['waktu_booking'] ?></td>
                    <!-- <td>15:00</td> -->
                </tr>
            </table>
            <br><br>
            <table align="center">
                <tr>
                    <td><button type="button" class="back"><a href="FormDrh.html">
                        <span class="Back_text"><b>Kembali</b></a></span>
                    </button></td>
                    <td style="width: 30px;"></td>
                    <td><button type="button" class="booking"><a href="<?= site_url('MyOrderController/index') ?>">
                        <span class="Booking_text"><b>Booking</b></a></span>
                    </button></td>
                </tr>
            </table>
        </div>
        <br><br><br><br>
    </body>
</html> 