<a href="<?= base_url(); ?>index.php/krs/create" class="btn btn-default pull-right">Pengisian KRS</a>

<br><br><br>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Nama Mahasiswa</th>
            <th>Jurusan</th>
            <th>Matakuliah</th>
            <th>SKS</th>
            <th>Biaya</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($krss as $krs): ?>
            <tr>
                <td><?= $krs->mahasiswa; ?></td>
                <td><?= $krs->jurusan; ?></td>
                <td>
                    <?php $d = explode(',', $krs->matakuliah); ?>
                    <?php foreach ($d as $e): ?>
                        <span class="label label-default"><?= $e ?></span>
                    <?php endforeach ?>
                </td>

                <td><?= $krs->sks; ?></td>
                <td>Rp <?= number_format($krs->sks*100000); ?></td>
                <td>
                    <a href="<?= base_url(); ?>index.php/krs/edit/<?= $krs->id; ?>" class="btn btn-info btn-xs">Edit</a>
                    <a href="<?= base_url(); ?>index.php/krs/delete/<?= $krs->id; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apa anda yakin?')">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>        
    </tbody>
</table>


