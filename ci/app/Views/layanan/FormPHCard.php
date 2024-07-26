<html>
    <head>
        <title>Pettopia</title>
        <link rel="stylesheet" type="text/css" href="/css/FormPHCard.css" />
    </head>
    <body>
        <br />
        <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
                <h1>Form Booking Layanan Penitipan Hewan</h1>
                <h2 class="subjudulform">Identitas</h2>
                <form action="/FormPHController/addForm" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                    <div class="field padding-bottom--24">
                        <label for="nama">Nama</label>
                        <input type="text" id="nama" name="nama" value="<?= old('nama') ?>" />
                    </div>
                    <div class="field padding-bottom--24">
                        <label for="nomor_hp">Nomor Handphone</label>
                        <input type="text" id="nomor_hp" name="nomor_hp" value="<?= old('nomor_hp') ?>" />
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
                        <label for="jenis_kelamin_hewan">Jenis Kelamin Hewan</label>
                        <select name="jenis_kelamin_hewan" title="Jenis Kelamin Hewan" id="jenis_kelamin_hewan">
                            <option value="Jantan">Jantan</option>
                            <option value="Betina">Betina</option>
                        </select>
                    </div>
                    <h2 class="subjudulform">Layanan Penitipan Hewan</h2>
                    <div class="field padding-bottom--24">
                        <div class="grid--50-50">
                            <div class="field padding-bottom--26">
                                <label for="tanggal_lahir_hewan">Tanggal Lahir Hewan</label>
                                <input type="date" id="tanggal_lahir_hewan" name="tanggal_lahir_hewan" value="<?= old('tanggal_lahir_hewan') ?>"/>
                            </div>
                            <div class="field padding-bottom--26">
                                <label for="berat_hewan">Berat Hewan (kg)</label>
                                <input type="text" id="berat_hewan" name="berat_hewan" value="<?= old('berat_hewan') ?>" />
                            </div>
                            <div class="field padding-bottom--26">
                                <label for="tanggal_checkin">Tanggal Check In</label>
                                <input type="date" id="tanggal_checkin" name="tanggal_checkin" value="<?= old('tanggal_checkin') ?>" />
                            </div>
                            <div class="field padding-bottom--26">
                                <label for="tanggal_checkout">Tanggal Check Out</label>
                                <input type="date" id="tanggal_checkout" name="tanggal_checkout" value="<?= old('tanggal_checkout') ?>"/>
                            </div>
                        </div>
                    </div>
                    <div class="field padding-bottom--24">
                        <label for="kondisiHewan">Kondisi Hewan (opsional)</label>
                        <textarea name="kondisiHewan" id="kondisiHewan" class="kondisi" cols="131" rows="5" placeholder="Tuliskan kondisi hewan Anda, seperti riwayat penyakit atau lainnya"><?= old('kondisiHewan') ?></textarea>
                    </div>
                    <div class="field padding-bottom--24">
                        <button type="submit">
                            <span class="Next_text"><b>Konfirmasi</b></span>
                        </button></a>
                    </div>
                </form>
            </div>
        </div>
        </br></br>
    </body>
</html>