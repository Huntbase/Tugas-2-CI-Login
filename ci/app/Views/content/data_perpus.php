<section>
    <h1>List Buku</h1>
    <div class="bg-primary text-white bg-gradient">
        <table align="center">
            <tr>
                <th width="150px">Judul</th>
                <th width="100px">Pengarang</th>
                <th width="150px">Total Halaman</th>
                <th width="100px">Tahun Terbit
            </tr>
            </tr>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <td><?= $d['judul']; ?></td>
                    <td align=center><?= $d['pengarang']; ?></td>
                    <td align=center><?= $d['total_halaman']; ?></td>
                    <td align=center><?= $d['tahun_terbit']; ?></td>
                    <td style="display: flex;">
                        <form action="<?= base_url('proses_delete_data') . '/' . $d['id'] ?>" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit">
                                <a>Delete</a>
                            </button>
                        </form>
                    </td>
                    <td>
                        <button>
                            <a href="/Edit_data/<?= $d['id']; ?>">Edit</a>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
    <button style="margin-top: 8px; margin-left:600px; padding:5px;">
            <a href="/Tambah_data">Tambah Data</a>
    </button>
</section>