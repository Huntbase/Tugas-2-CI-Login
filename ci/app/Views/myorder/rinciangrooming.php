<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/RincianFormGr.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
    <div class="formbg"><br>
        <h1 class="judulrincian">Rincian Booking Grooming Hewan</h1>
        <br>
        <table align="center">
        <?php if ($formgrooming) : ?>
            <tr>
                <td width="254px">Nama</td>
                <td width="35px" align="center">:</td>
                <td><?= $formgrooming['nama'] ?></td>
                <!-- <td width="619px">Meilani</td> -->
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td align="center">:</td>
                <td><?= $formgrooming['nomor_hp'] ?></td>
                <!-- <td>Kitty</td> -->
            </tr>
            <tr>
                <td>Nama Hewan</td>
                <td align="center">:</td>
                <td><?= $formgrooming['nama_hewan'] ?></td>
                <!-- <td>Kitty</td> -->
            </tr>
            <tr>
                <td>Spesies Hewan</td>
                <td align="center">:</td>
                <td><?= $formgrooming['spesies_hewan'] ?></td>
                <!-- <td>Kucing</td> -->
            </tr>
            <tr>
                <td>Ras Hewan</td>
                <td align="center">:</td>
                <td><?= $formgrooming['ras_hewan'] ?></td>
                <!-- <td>Persia</td> -->
            </tr>
            <tr>
                <td>Berat Hewan</td>
                <td align="center">:</td>
                <td><?= $formgrooming['berat_hewan'] ?></td>
                <!-- <td>3 kg 200 gram</td> -->
            </tr>
            <tr>
                <td>Tanggal Booking</td>
                <td align="center">:</td>
                <td><?= $formgrooming['tanggal_booking'] ?></td>
                <!-- <td>24/11/2023</td> -->
            </tr>
            <tr>
                <td>Waktu Booking</td>
                <td align="center">:</td>
                <td><?= $formgrooming['waktu_booking'] ?></td>
                <!-- <td>10:00</td> -->
            </tr>
            <tr>
                <td>Jenis Grooming</td>
                <td align="center">:</td>
                <td><?= $formgrooming['jenis_grooming'] ?></td>
                <!-- <td>10:00</td> -->
            </tr>
            <?php endif; ?>
        </table>
        <br>
        </div>
    </body>
</html>