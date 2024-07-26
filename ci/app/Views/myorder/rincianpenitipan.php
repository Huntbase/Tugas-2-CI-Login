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
                <?php if ($formpenitipan) : ?>
                    <tr>
                        <td width="254px">Nama</td>
                        <td width="35px" align="center">:</td>
                        <td><?= $formpenitipan['nama'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama Hewan</td>
                        <td align="center">:</td>
                        <td><?= $formpenitipan['nama_hewan'] ?></td>
                    </tr>
                    <tr>
                        <td>Spesies Hewan</td>
                        <td align="center">:</td>
                        <td><?= $formpenitipan['spesies_hewan'] ?></td>
                    </tr>
                    <tr>
                        <td>Ras Hewan</td>
                        <td align="center">:</td>
                        <td><?= $formpenitipan['ras_hewan'] ?></td>
                    </tr>
                    <tr>
                        <td>Berat Hewan</td>
                        <td align="center">:</td>
                        <td><?= $formpenitipan['berat_hewan'] ?> kg</td>
                    </tr>
                    <tr>
                        <td>Tanggal Check In</td>
                        <td align="center">:</td>
                        <td><?= $formpenitipan['tanggal_checkin'] ?></td>
                    </tr>
                    <tr>
                        <td>Tanggal Check Out</td>
                        <td align="center">:</td>
                        <td><?= $formpenitipan['tanggal_checkout'] ?></td>
                    </tr>
                    <tr>
                        <td>Total Hari</td>
                        <td align="center">:</td>
                        <td><?php
                            $checkin = new DateTime($formpenitipan['tanggal_checkin']);
                            $checkout = new DateTime($formpenitipan['tanggal_checkout']);
                            $interval = $checkin->diff($checkout);
                            $jumlah_hari = $interval->days;
                        ?><?= $jumlah_hari ?> hari</td>
                    </tr>
                <?php endif; ?>
            </table>
            <br>
            </div>
    </body>
</html> 