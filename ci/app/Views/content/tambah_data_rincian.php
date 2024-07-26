<section>
    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="alert alert-danger fs-sm p-0 d-flex align-items-center justify-content-center" role="alert" style="width: fit-content; height:fit-content;">
            <?= session()->getFlashdata('errors'); ?>
        </div>
    <?php endif; ?>
    <form action="proses_add_data" method="post" style=" max-width: 400px; display:flex; flex-direction:column; gap:8px">
        <?= csrf_field() ?>
        <div style="gap: 1px; display: flex; flex-direction: column; max-width: 400px;">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" id="nama_produk" name="nama_produk">
        </div>
        <div style="gap: 1px; display: flex; flex-direction:column; max-width: 400px;">
            <label for="harga">Harga</label>
            <input type="number" id="harga" name="harga">
        </div>
        <div style="gap: 1px; display: flex; flex-direction:column; max-width: 400px;">
            <label for="berat">Berat</label>
            <input type="number" id="berat" name="berat">
        </div>
        <div style="gap: 1px; display: flex; flex-direction:column; max-width: 400px;">
            <label for="exp_date">Tanggal Expired</label>
            <input type="date" id="exp_date" name="exp_date">
        </div>
        <button type="submit" style="width: fit-content;">Submit</button>
    </form>
</section>