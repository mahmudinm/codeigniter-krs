<form action="<?= base_url(); ?>index.php/matakuliah/update" method="POST" role="form">
    <legend>Update Data matakuliah</legend>

    <input type="hidden" name="id_hide" value="<?= $matakuliah['id']; ?>">

    <div class="form-group <?php echo (form_error('nama') ? 'has-error' : '') ?>">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama" value="<?= $matakuliah['nama'] ?>">
        <small class="block text-danger"><?= form_error('nama'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('semester') ? 'has-error' : '') ?>">
        <label for="semester">Semester</label>
        <input type="text" class="form-control" id="semester" name="semester" placeholder="Isikan semester" value="<?= $matakuliah['semester'] ?>">
        <small class="block text-danger"><?= form_error('semester'); ?></small>
    </div>    

    <div class="form-group <?php echo (form_error('fakultas') ? 'has-error' : '') ?>">
        <label for="fakultas">Fakultas</label>
        <select name="fakultas" id="fakultas" class="form-control" required="required" value="FKIP">
            <option value="Teknik" <?= ($matakuliah['fakultas'] == 'Teknik' ? 'selected' : '' ); ?>>Teknik</option>
            <option value="FKIP" <?= ($matakuliah['fakultas'] == 'FKIP' ? 'selected' : '' ); ?>>FKIP</option>
            <option value="FE" <?= ($matakuliah['fakultas'] == 'FE' ? 'selected' : '' ); ?>>FE</option>
        </select>
        <small class="block text-danger"><?= form_error('fakultas'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('jurusan') ? 'has-error' : '') ?>">
        <label for="jurusan">Jurusan</label>
        <select name="jurusan" id="jurusan" class="form-control" required="required">
            <optgroup label="Teknik">
                <option value="Teknik Informatika" <?= ($matakuliah['jurusan'] == 'Teknik Informatika' ? 'selected' : '' ); ?> >Teknik Informatika</option>
                <option value="Teknik Kimia" <?= ($matakuliah['jurusan'] == 'Teknik Kimia' ? 'selected' : '' ); ?>>Teknik Kimia</option>
                <option value="Teknik Industri" <?= ($matakuliah['jurusan'] == 'Teknik Industri' ? 'selected' : '' ); ?>>Teknik Industri</option>
            </optgroup>
            <optgroup label="FKIP">
                <option value="Bahasa Inggris" <?= ($matakuliah['jurusan'] == 'Bahasa Inggris' ? 'selected' : '' ); ?>>Bahasa Inggris</option>
            </optgroup>
            <optgroup label="FE">
                <option value="Manajemen" <?= ($matakuliah['jurusan'] == 'Manajemen' ? 'selected' : '' ); ?>>Manajemen</option>
            </optgroup>
        </select>
        <small class="block text-danger"><?= form_error('jurusan'); ?></small>
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-warning">Reset</button>

</form>

