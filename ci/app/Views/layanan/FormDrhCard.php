<html>
    <head>
        <title>Pettopia</title>
        <link rel="stylesheet" type="text/css" href="/css/FormDrhCard.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        />
    </head>
    <body>
        <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
                <h1>Form Booking Layanan Dokter Hewan</h1>
                <h2 class="subjudulform">Identitas</h2>
                <form action="/FormDrhController/addForm" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                    <div class="field padding-bottom--24">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" value="<?= old('nama') ?>" />
                    </div>
                    <div class="field padding-bottom--24">
                        <label for="nomor_hp">Nomor Handphone</label>
                        <input type="number" id="nomor_hp" name="nomor_hp" placeholder="0812-3456-7891" value="<?= old('nomor_hp') ?>" />
                    </div>
                    <div class="field padding-bottom--24">
                        <label for="nama_hewan">Nama Hewan</label>
                        <input type="text" id="nama_hewan" name="nama_hewan" value="<?= old('nama_hewan') ?>" />
                    </div>
                    <div class="field padding-bottom--25">
                        <label for="spesies_hewan">Spesies Hewan</label>
                        <select name="spesies_hewan" title="Spesies Hewan" id="spesies_hewan">
                            <option value="Kucing">Kucing</option>
                            <option value="Anjing">Anjing</option>
                            <option value="Ikan">Ikan</option>
                        </select>
                    </div>
                    <div class="field padding-bottom--24">
                        <label for="ras_hewan">Ras Hewan</label>
                        <input type="text" id="ras_hewan" name="ras_hewan" value="<?= old('ras_hewan') ?>" />
                    </div>
                    <div class="field padding-bottom--25">
                        <label for="jenis_kelamin">Jenis Kelamin Hewan</label>
                        <select name="jenis_kelamin" title="Jenis Kelamin Hewan" id="jenis_kelamin">
                            <option value="Jantan">Jantan</option>
                            <option value="Betina">Betina</option>
                        </select>
                    </div>
                    <div class="field padding-bottom--24">
                        <div class="grid--50-50">
                            <div class="field padding-bottom--26">
                                <label for="tanggal_lahir_hewan">Tanggal Lahir Hewan</label>
                                <input type="date" id="tanggal_lahir_hewan" name="tanggal_lahir_hewan" value="<?= old('tanggal_lahir_hewan') ?>"/>
                            </div>
                            <div class="field padding-bottom--26">
                                <label for="berat_hewan">Berat Hewan (kg)</label>
                                <input type="number" id="berat_hewan" name="berat_hewan" value="<?= old('berat_hewan') ?>" />
                            </div>
                        </div>
                    </div>
                    <h2 class="subjudulform" style="margin-top:-10px;">Layanan</h2>
                    <div class="field padding-bottom--25">
                        <label for="jenis_layanan">Jenis Layanan</label>
                        <select name="jenis_layanan" title="Jenis layanan" id="jenis_layanan">
                            <option value="Kesehatan">Kesehatan</option>
                            <option value="Vaksinasi">Vaksinasi</option>
                            <option value="Sterilisasi">Sterilisasi</option>
                        </select>
                    </div>
                    <div class="field padding-bottom--24">
                        <label for="tanggal_booking">Tanggal Booking</label>
                        <input type="date" id="tanggal_booking" name="tanggal_booking" />
                    </div>
                    <div class="field padding-bottom--25">
                        <label for="waktu_booking">Waktu Booking</label>
                        <select name="waktu_booking" title="Waktu Booking" id="waktu_booking">
                            <option value="09:00">09:00</option>
                            <option value="09:30">09:30</option>
                            <option value="10:00">10:00</option>
                            <option value="10:30">10:30</option>
                            <option value="11:00">11:00</option>
                            <option value="11:30">11:30</option>
                            <option value="12:00">12:00</option>
                            <option value="12:30">12:30</option>
                            <option value="13:00">13:00</option>
                            <option value="13:30">13:30</option>
                            <option value="14:00">14:00</option>
                            <option value="14:30">14:30</option>
                            <option value="15:00">15:00</option>
                            <option value="15:30">15:30</option>
                            <option value="16:00">16:00</option>
                            <option value="16:30">16:30</option>
                            <option value="17:00">17:00</option>
                            <option value="17:30">17:30</option>
                        </select>
                    </div>
                    <div class="field padding-bottom--24">
                        <button type="submit">
                            <span class="Next_text"><b>Konfirmasi</b></span>
                        </button></a>
                    </div>
                </form>
            </div>
        </div>
        <br /><br /><br /><br />
    </body>
</html>
