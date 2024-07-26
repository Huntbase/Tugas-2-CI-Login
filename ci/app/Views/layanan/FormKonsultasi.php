<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/css/formkonsultasionlineCard.css" />
    </head>
    <body>
        <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
            <h1>Form Konsultasi Online</h1>
            <h2 class="subjudulform">Identitas</h2>
            <form action="/formkonsultasi/submit" method="post" enctype="multipart/form-data">
                <?= csrf_field() ?>
                <?php if (session()->getFlashdata('errors')) : ?>
                <div class="alert alert-danger">
                    <?php foreach (session()->getFlashdata('errors') as $error) : ?>
                    <p><?= $error ?></p>
                    <?php endforeach ?>
                </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('success')) : ?>
                <div class="alert alert-success">
                    <?= session()->getFlashdata('success') ?>
                </div>
                <?php endif; ?>

                <?php if (session()->getFlashdata('error')) : ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata('error') ?>
                </div>
                <?php endif; ?>

                <div class="field padding-bottom--24">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required />
                </div>
                <div class="field padding-bottom--24">
                <label for="nomor_hp">Nomor Handphone</label>
                <input type="number" id="nomor_hp" name="nomor_hp" required />
                </div>
                <div class="field padding-bottom--24">
                <label for="nama_hewan">Nama Hewan</label>
                <input type="text" id="nama_hewan" name="nama_hewan" required />
                </div>
                <div class="field padding-bottom--25">
                <label for="spesies_hewan">Spesies Hewan</label>
                <select name="spesies_hewan" id="spesies_hewan required">
                    <option value="Kucing">Kucing</option>
                    <option value="Anjing">Anjing</option>
                    <option value="Ikan">Ikan</option>
                </select>
                </div>
                <div class="field padding-bottom--24">
                    <label for="ras_hewan">Ras Hewan</label>
                    <input type="text" id="ras_hewan" name="ras_hewan" required />
                </div>
                <div class="field padding-bottom--25">
                    <label for="jenis_kelamin_hewan">Jenis Kelamin Hewan</label>
                    <select name="jenis_kelamin_hewan" id="jenis_kelamin_hewan">
                        <option value="Jantan">Jantan</option>
                        <option value="Betina">Betina</option>
                    </select>
                </div>
                <h2 class="subjudulform">Layanan</h2>
                <div class="field padding-bottom--25">
                            <label for="dokter_hewan">Dokter Hewan</label>
                            <select name="dokter_hewan" id="dokter_hewan">
                                <option value="drh. Vanya Prastuti">drh. Vanya Prastuti</option>
                                <option value="drh. Hardi Setiawan">drh. Hardi Setiawan</option>
                                <option value="drh. Natalia Agustina">drh. Natalia Agustina</option>
                            </select>
                        </div>
                <div>
                    <div class="grid--50-50">
                        <div class="field padding-bottom--26">
                            <label for="tanggal_lahir_hewan">Tanggal Lahir Hewan</label>
                            <input type="date" id="tanggal_lahir_hewan" name="tanggal_lahir_hewan" required />
                        </div>
                        <div class="field padding-bottom--26">
                            <label for="berat_hewan">Berat Hewan (kg)</label>
                            <input type="text" id="berat_hewan" name="berat_hewan" required />
                        </div>
                    </div>
                </div>
                <div class="field padding-bottom--24">
                    <label for="kondisi_hewan">Kondisi Hewan</label>
                    <textarea name="kondisi_hewan" id="kondisi_hewan" class="kondisi" cols="131" rows="5" placeholder="Tuliskan kondisi hewan Anda"><?= old('kondisiHewan') ?></textarea>
                </div>
                <h2 class="subjudulform">Pembayaran</h2>
                <label for="metode_pembayaran">Metode Pembayaran</label>
                <select name="metode_pembayaran" id="metode_pembayaran">
                    <option value="Dana">DANA</option>
                    <option value="GoPay">GoPay</option>
                    <option value="ShopeePay">ShopeePay</option>
                </select>
                </div>
                <div class="field padding-bottom--24">
                    <button type="submit" class="booking">
                        <span class="Next_text"><b>Booking</b></a></span>
                    </button>
                </div>
            </form>
            </div>
        </div>
        <br /><br /><br /><br />
    </body>
</html>