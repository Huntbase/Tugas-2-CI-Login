<section>
    <?php foreach ($data as $d) :  ?>
        <form action="proses_update/<?= $d['id']; ?>" method="post" style="max-width: 400px; display:flex; flex-direction:column; gap: 8px">
            <?= csrf_field() ?>
            <div style="gap: 1px; display: flex; flex-direction: column; max-width: 400px;">
                <label for="judul">Nama Produk</label>
                <input type="text" value="<?= $d['nama_produk']; ?>" id="nama_produk" name="nama_produk">
            </div>
            <div style="gap: 1px; display: flex; flex-direction:column; max-width: 400px;">
                <label for="Harga">Harga</label>
                <input type="number" value="<?= $d['harga']; ?>" id="harga" name="harga">
            </div>
            <div style="gap: 1px; display: flex; flex-direction:column; max-width: 400px;">
                <label for="berat">Berat</label>
                <input type="number" value="<?= $d['berat']; ?>" id="berat" name="berat">
            </div>
            <div style="gap: 1px; display: flex; flex-direction:column; max-width: 400px;">
                <label for="tahun_terbit">Tanggal Expired</label>
                <input type="date" value="<?= $d['exp_date']; ?>" id="exp_date" name="exp_date">
            </div>
            <button type="submit" style="max-width: 20%;">Submit</button>
        </form>
    <?php endforeach; ?>
</section>