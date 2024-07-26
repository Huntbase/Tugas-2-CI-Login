<section>
    <?php foreach ($data as $d) : ?>
        <form action="proses_update/<?= $d['id']; ?>" method="post" style=" max-width: 400px; display:flex; flex-direction:column; gap:8px">
            <?= csrf_field() ?>
            <div style="gap:1px; display:flex; flex-direction:column; max-width:400px;">
                <label for="judul">Judul</label>
                <input type="text" value="<?= $d['judul']; ?>" id="judul" name="judul">
            </div>
            <div style="gap:1px; display:flex; flex-direction:column; max-width:400px;">
                <label for="pengarang">Pengarang</label>
                <input type="text" value="<?= $d['pengarang']; ?>" id="pengarang" name="pengarang">
            </div>
            <div style="gap:1px; display:flex; flex-direction:column; max-width:400px;">
                <label for="total_halaman">Total Halaman</label>
                <input type="number" value="<?= $d['total_halaman']; ?>" id="total_halaman" name="total_halaman">
            </div>
            <div style="gap:1px; display:flex; flex-direction:column; max-width:400px;">
                <label for="tahun_terbit">Tahun Terbit</label>
                <input type="number" value="<?= $d['tahun_terbit']; ?>" id="tahun_terbit" name="tahun_terbit">
            </div>
            <button type="submit" style="max-width: 20%">Submit</button>
        </form>
    <?php endforeach; ?>
</section>