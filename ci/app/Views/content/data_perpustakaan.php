<section>
    <h1>List Buku</h1>
    <table border="1">
        <tr>
            <th width=150px>Judul</th>
            <th width=100px>Pengarang</th>
            <th width=150px>Total Halaman</th>
            <th width=100px>Tahun Terbit</tr>
        </tr>
        <?php foreach ($all_data as $item) : ?>
            <tr>
                <td><?= $item['Judul']; ?></td>
                <td><?= $item['Pengarang']; ?></td>
                <td><?= $item['Total_halaman']; ?></td>
                <td><?= $item['Tahun_terbit']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>