<section>
    <?php if (session()->getFlashdata('errors')) : ?>
        <div class="alert alert-danger fs-sm p-0 d-flex align-items-center justify-content-center" role="alert" style="width: fit-content; height:fit-content;">
            <?= session()->getFlashdata('errors'); ?>
        </div>
    <?php endif; ?>
    <form action="proses_add_data" method="post" style=" max-width: 400px; display:flex; flex-direction:column; gap:8px">
        <?= csrf_field() ?>
        <div style="gap: 1px; display: flex; flex-direction: column; max-width: 400px;">
            <label for="judul">Judul</label>
            <input type="text" id="judul" name="judul">
        </div>
        <div style="gap: 1px; display: flex; flex-direction:column; max-width: 400px;">
            <label for="pengarang">Pengarang</label>
            <input type="text" id="pengarang" name="pengarang">
        </div>
        <div style="gap: 1px; display: flex; flex-direction:column; max-width: 400px;">
            <label for="total_halaman">Total Halaman</label>
            <input type="number" id="total_halaman" name="total_halaman">
        </div>
        <div style="gap: 1px; display: flex; flex-direction:column; max-width: 400px;">
            <label for="tahun_terbit">Tahun Terbit</label>
            <input type="number" id="tahun_terbit" name="tahun_terbit">
        </div>
        <button type="submit" style="width: fit-content;">Submit</button>
    </form>
</section>