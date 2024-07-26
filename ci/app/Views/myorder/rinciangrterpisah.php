<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/RincianFormGr.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
    <div class="formbg"><br>
        <h1>Rincian Booking Grooming Terpisah</h1>
        <br>
        <table align="center">
        <?php if ($formgrterpisah) : ?>
            <tr>
                <td width="254px">Nama</td>
                <td width="35px" align="center">:</td>
                <td><?= $formgrterpisah['nama'] ?></td>
                <!-- <td width="619px">Meilani</td> -->
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td align="center">:</td>
                <td><?= $formgrterpisah['nomor_hp'] ?></td>
                <!-- <td>Kitty</td> -->
            </tr>
            <tr>
                <td>Nama Hewan</td>
                <td align="center">:</td>
                <td><?= $formgrterpisah['nama_hewan'] ?></td>
                <!-- <td>Kitty</td> -->
            </tr>
            <tr>
                <td>Spesies Hewan</td>
                <td align="center">:</td>
                <td><?= $formgrterpisah['spesies_hewan'] ?></td>
                <!-- <td>Kucing</td> -->
            </tr>
            <tr>
                <td>Ras Hewan</td>
                <td align="center">:</td>
                <td><?= $formgrterpisah['ras_hewan'] ?></td>
                <!-- <td>Persia</td> -->
            </tr>
            <tr>
                <td>Berat Hewan</td>
                <td align="center">:</td>
                <td><?= $formgrterpisah['berat_hewan'] ?></td>
                <!-- <td>3 kg 200 gram</td> -->
            </tr>
            <tr>
                <td>Tanggal Booking</td>
                <td align="center">:</td>
                <td><?= $formgrterpisah['tanggal_booking'] ?></td>
                <!-- <td>24/11/2023</td> -->
            </tr>
            <tr>
                <td>Waktu Booking</td>
                <td align="center">:</td>
                <td><?= $formgrterpisah['waktu_booking'] ?></td>
                <!-- <td>10:00</td> -->
            </tr>
            <tr>
                <td>Layanan Grooming</td>
                <td align="center">:</td>
                <td><?= $formgrterpisah['layanan_grooming'] ?></td>
                <!-- <td>10:00</td> -->
            </tr>
        </table>
        <br>
        <?php endif; ?>
    </div>
    </body>
</html>