<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/JenisDokter.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
        <h1>KONSULTASI ONLINE</h1>
        <table align="center">
            <tr>
                <td width="500px" rowspan="4"><div class="gambar">
                    <img src="/img/Images/konsultasionline2.png">
                </div>
                </td>
                <td width="550px" colspan="3" valign="bottom"><div class="keterangan">
                    Konsultasi secara daring dengan dokter pilihan Anda untuk mendapat penjelasan dan 
                    instruksi tindakan yang benar bagi hewan peliharaan Anda. Anda dapat melakukan konsultasi 
                    melalui chat atau video sesuai dengan kebutuhan Anda dan hewan peliharaan Anda.
                </div></td>
            </tr>
            <tr height="60">
                <td align="right" width="270px"><button type="Harga"><a href="#daftarharga">
                    Lihat Daftar Harga</a>
                </button></td>
                <td width="10px"></td>
                <td align="left"><button type="Booking"><a href="<?= site_url('FormKonsultasiController/index') ?>">
                    Booking!</a>
                </button></td>
            </tr>
            <tr height="30px">
                <td align="center" colspan="3">
                    <a class="kembali" id="daftarharga" href="<?= site_url('DokterController/index') ?>">Lihat Jenis Layanan Dokter Lainnya</a>
                </td>
            </tr>
            <tr height="30px">
            </tr>
        </table>
        <br>
        <h1>DAFTAR HARGA</h1>
        <table align="center">
            <tr height="40px" class="headertabel">
                <th width="396px">Jenis Konsultasi</th>
                <th width="396px">Harga (Rp) / 15 menit</th>
            </tr>
            <?php foreach ($hargadrkonsultasi as $harga) : ?>
                <tr  height="40px" class="isitabel">
                    <td><?= $harga['jenis_konsultasi']; ?></td>
                    <td><?= number_format($harga['harga_per_15_menit'], 0, ',', '.') ?></td>
                </tr>
            <?php endforeach; ?> 
        </table>
    </body>
</html> 