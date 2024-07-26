<section>
    <h1>List Mahasiswa</h1>
    <table>
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Semester</tr>
        </tr>
        <?php foreach ($data as $d) : ?>
            <tr>
                <td><?= $d['npm']; ?></td>
                <td><?= $d['nama']; ?></td>
                <td><?= $d['program_studi']; ?></td>
                <td><?= $d['semester']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</section>