<a href="<?= base_url(); ?>index.php/mahasiswa/create" class="btn btn-default pull-right">Tambah Mahasiswa</a>

<br><br><br>

<table class="table table-hover">
    <thead>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($mahasiswas as $mahasiswa): ?>
            <tr>
                <td><?= $mahasiswa->nim ?></td>
                <td><?= $mahasiswa->nama ?></td>
                <td><?= $mahasiswa->fakultas ?></td>
                <td><?= $mahasiswa->jurusan ?></td>
                <td>
                    <a href="<?= base_url(); ?>index.php/mahasiswa/edit/<?= $mahasiswa->nim; ?>" class="btn btn-info btn-xs">Edit</a>
                    <a href="<?= base_url(); ?>index.php/mahasiswa/delete/<?= $mahasiswa->nim; ?>" class="btn btn-danger btn-xs" onclick="return confirm('Apa anda yakin?')">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>        
    </tbody>
</table>


