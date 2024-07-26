<section>
    <h1>List Mahasiswa</h1>
    <table border="1">
        <tr>
            <th width="150px">Nama</th>
            <th width="100px">Donasi (Rp)</th>
        </tr>
        <?php foreach ($all_data as $item) : ?>
            <tr>
                <td><?= $item['name']; ?></td>
                <td><?= "Rp. ", number_format($item['donate'], 0, ",", "."); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>