<a href="<?= base_url(); ?>index.php/matakuliah/create" class="btn btn-default pull-right">Tambah matakuliah</a>

<br><br><br>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Nama Matakuliah</th>
            <th>Semester</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($matakuliahs as $matakuliah): ?>
            <tr>
                <td><?= $matakuliah->nama ?></td>
                <td><?= $matakuliah->semester ?></td>
                <td><?= $matakuliah->fakultas ?></td>
                <td><?= $matakuliah->jurusan ?></td>
                <td>
                    <a href="<?= base_url(); ?>index.php/matakuliah/edit/<?= $matakuliah->id; ?>" class="btn btn-info btn-xs">Edit</a>
                    <a href="<?= base_url(); ?>index.php/matakuliah/delete/<?= $matakuliah->id; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apa anda yakin?')">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>        
    </tbody>
</table>