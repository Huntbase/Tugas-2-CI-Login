<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/PsLayanan.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
        <div class="judul">PESANAN SAYA</div><br>
        <?php foreach ($formpenitipan as $penitipan) : ?>
            <div class="riwayat">
                <a class="detail" href="<?= base_url('myorder/rincianph/' . $penitipan['id']) ?>">
                <h4><b>Penitipan Hewan</b></h4>
                <P class="nama"><b><?= $penitipan['nama'] ?> - <?= $penitipan['nama_hewan'] ?></b></p>
                <p class="keterangan"><?= $penitipan['tanggal_checkin'] ?> sampai <?= $penitipan['tanggal_checkout'] ?></p>
                <p class="keterangan">
                    <?php
                        $checkin = new DateTime($penitipan['tanggal_checkin']);
                        $checkout = new DateTime($penitipan['tanggal_checkout']);
                        $interval = $checkin->diff($checkout);
                        $jumlah_hari = $interval->days;
                    ?><?= $jumlah_hari ?> hari
                </p>
                <a class="cek" href="<?= base_url('myorder/rincianph/' . $penitipan['id']) ?>">Cek Selengkapnya ></a>
                </a>
            </div>
            <br>
        <?php endforeach; ?>
        <?php foreach ($formgrooming as $grooming) : ?>
            <div class="riwayat">
                <a class="detail" href="<?= base_url('myorder/rinciangr/' . $grooming['id']) ?>">
                <h4><b>Grooming Hewan</b></h4>
                <P class="nama"><b><?= $grooming['nama'] ?> - <?= $grooming['nama_hewan'] ?></b></p>
                <p class="keterangan"><?= $grooming['tanggal_booking'] ?> | <?= $grooming['waktu_booking'] ?></p>
                <p class="keterangan"><?= $grooming['jenis_grooming'] ?></p>
                <a class="cek" href="<?= base_url('myorder/rinciangr/' . $grooming['id']) ?>">Cek Selengkapnya ></a>
                </a>
            </div>
            <br>
        <?php endforeach; ?>
        <?php foreach ($formgrterpisah as $grterpisah) : ?>
            <div class="riwayat">
                <a class="detail" href="<?= base_url('myorder/rinciangrterpisah/' . $grterpisah['id']) ?>">
                <h4><b>Grooming Hewan - Layanan Terpisah</b></h4>
                <P class="nama"><b><?= $grterpisah['nama'] ?> - <?= $grterpisah['nama_hewan'] ?></b></p>
                <p class="keterangan"><?= $grterpisah['tanggal_booking'] ?> | <?= $grterpisah['waktu_booking'] ?></p>
                <p class="keterangan"><?= $grterpisah['layanan_grooming'] ?></p>
                <a class="cek" href="<?= base_url('myorder/rinciangrterpisah/' . $grterpisah['id']) ?>">Cek Selengkapnya ></a>
                </a>
            </div>
            <br>
        <?php endforeach; ?>
        <?php foreach ($formdokter as $dokter) : ?>
            <div class="riwayat">
                <a class="detail" href="<?= base_url('myorder/rinciandr/' . $dokter['id']) ?>">
                <h4><b>Dokter Hewan</b></h4>
                <P class="nama"><b><?= $dokter['nama'] ?> - <?= $dokter['nama_hewan'] ?></b></p>
                <p class="keterangan"><?= $dokter['tanggal_booking'] ?> | <?= $dokter['waktu_booking'] ?></p>
                <p class="keterangan"><?= $dokter['jenis_layanan'] ?></p>
                <a class="cek" href="<?= base_url('myorder/rinciandr/' . $dokter['id']) ?>">Cek Selengkapnya ></a>
                </a>
            </div>
            <br>
        <?php endforeach; ?>
    </body>
</html> 