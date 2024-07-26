<html>
    <head>
        <title> Pettopia </title>
        <link rel="stylesheet" type = "text/css" href="/css/GroomingHewan.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    </head>
    <body>
    <h1>KONSULTASI ONLINE ATAU BOOKING JADWAL DOKTER UNTUK HEWAN PELIHARAAN KAMU DISINI!</h1>
        <div class="judul">Jenis Layanan Dokter Kami</div><br>
        <table height= "300px" align="center">
            <tr>
                <th width="300px"><div class="fasilitas1">
                    <p1>KESEHATAN</p1><br><br>
                    <a href="<?= site_url('DokterController/dr1') ?>"><img src="/img/Images/kesehatan.png"><br><br>
                    <button type="SeeMore">
                        <span class="SeeMore_text"><b>See more</b></a></span>
                    </button>
                </div></th>
                <th width="300px"><div class="fasilitas2">
                    <p2>VAKSINASI</p2><br><br>
                    <a href="<?= site_url('DokterController/dr2') ?>"><img src="/img/Images/vaksinasi.png"><br><br>
                    <button type="SeeMore">
                        <span class="SeeMore_text"><b>See more</b></a></span>
                    </button>
                </div></th>
                <th width="300px"><div class="fasilitas3">
                    <p3>STERILISASI</p3><br><br>
                    <a href="<?= site_url('DokterController/dr3') ?>"><img src="/img/Images/sterilisasi.png"><br><br>
                    <button type="SeeMore">
                        <span class="SeeMore_text"><b>See more</b></a></span>
                    </button>
                </div></th>
                <th width="300px"><div class="fasilitas4">
                    <p4>KONSULTASI ONLINE</p4><br><br>
                    <a href="<?= site_url('DokterController/dr4') ?>"><img src="/img/Images/konsultasionline.png"><br><br>
                    <button type="SeeMore">
                        <span class="SeeMore_text"><b>See more</b></a></span>
                    </button>
                </div></th>
            </tr>
        </table>
    </body>
</html> 