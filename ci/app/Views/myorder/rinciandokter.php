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
                <?php if ($formdokter) : ?>
                    <tr>
                        <td width="254px">Nama</td>
                        <td width="35px" align="center">:</td>
                        <td><?= $formdokter['nama'] ?></td>
                        <!-- <td width="619px">Yahya</td> -->
                    </tr>
                    <tr>
                            <td>Nomor HP</td>
                            <td align="center">:</td>
                            <td><?= $formdokter['nomor_hp'] ?></td>
                            <!-- <td>Kani</td> -->
                        </tr>
                    <tr>
                        <td>Nama Hewan</td>
                        <td align="center">:</td>
                        <td><?= $formdokter['nama_hewan'] ?></td>
                        <!-- <td>Dogi</td> -->
                    </tr>
                    <tr>
                        <td>Spesies Hewan</td>
                        <td align="center">:</td>
                        <td><?= $formdokter['spesies_hewan'] ?></td>
                        <!-- <td>Anjing</td> -->
                    </tr>
                    <tr>
                        <td>Ras Hewan</td>
                        <td align="center">:</td>
                        <td><?= $formdokter['ras_hewan'] ?></td>
                        <!-- <td>Mini Pom</td> -->
                    </tr>
                    <tr>
                        <td>Berat Hewan</td>
                        <td align="center">:</td>
                        <td><?= $formdokter['berat_hewan'] ?></td>
                        <!-- <td>2 kg 100 gram</td> -->
                    </tr>
                    <tr>
                        <td>Jenis Layanan</td>
                        <td align="center">:</td>
                        <td><?= $formdokter['jenis_layanan'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Booking</td>
                        <td align="center">:</td>
                        <td><?= $formdokter['tanggal_booking'] ?></td>
                        <!-- <td>20/11/2023</td> -->
                    </tr>
                    <tr>
                        <td>Waktu Booking</td>
                        <td align="center">:</td>
                        <td><?= $formdokter['waktu_booking'] ?></td>
                        <!-- <td>15:00</td> -->
                    </tr>
                <?php endif; ?>
            </table><br>
        </div>
        <br><br><br><br>
    </body>
</html> 