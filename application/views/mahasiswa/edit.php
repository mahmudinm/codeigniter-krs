<form action="<?= base_url(); ?>index.php/mahasiswa/update" method="POST" role="form">
    <legend>Update Data Mahasiswa</legend>

    <input type="hidden" name="nim_hide" value="<?= $mahasiswa['nim']; ?>">

    <div class="form-group <?php echo (form_error('nim') ? 'has-error' : '') ?>">
        <label for="nim">Nim</label>
        <input type="text" class="form-control" id="nim" name="nim" placeholder="Isikan NIM" value="<?= $mahasiswa['nim'] ?>">
        <small class="block text-danger"><?= form_error('nim'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('nama') ? 'has-error' : '') ?>">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama" value="<?= $mahasiswa['nama'] ?>">
        <small class="block text-danger"><?= form_error('nama'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('semester') ? 'has-error' : '') ?>">
        <label for="semester">Semester</label>
        <input type="text" class="form-control" id="semester" name="semester" placeholder="Isikan semester" value="<?= $mahasiswa['semester'] ?>">
        <small class="block text-danger"><?= form_error('semester'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('ipk') ? 'has-error' : '') ?>">
        <label for="ipk">IPK</label>
        <input type="text" class="form-control" id="ipk" name="ipk" placeholder="Isikan IPK" value="<?= $mahasiswa['ipk'] ?>">
        <small class="block text-danger"><?= form_error('ipk'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('fakultas') ? 'has-error' : '') ?>">
        <label for="fakultas">Fakultas</label>
        <select name="fakultas" id="fakultas" class="form-control" required="required" value="FKIP">
            <option value="Teknik" <?= ($mahasiswa['fakultas'] == 'Teknik' ? 'selected' : '' ); ?>>Teknik</option>
            <option value="FKIP" <?= ($mahasiswa['fakultas'] == 'FKIP' ? 'selected' : '' ); ?>>FKIP</option>
            <option value="FE" <?= ($mahasiswa['fakultas'] == 'FE' ? 'selected' : '' ); ?>>FE</option>
        </select>
        <small class="block text-danger"><?= form_error('fakultas'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('jurusan') ? 'has-error' : '') ?>">
        <label for="jurusan">Jurusan</label>
        <select name="jurusan" id="jurusan" class="form-control" required="required">
            <optgroup label="Teknik">
                <option value="Teknik Informatika" <?= ($mahasiswa['jurusan'] == 'Teknik Informatika' ? 'selected' : '' ); ?> >Teknik Informatika</option>
                <option value="Teknik Kimia" <?= ($mahasiswa['jurusan'] == 'Teknik Kimia' ? 'selected' : '' ); ?>>Teknik Kimia</option>
                <option value="Teknik Industri" <?= ($mahasiswa['jurusan'] == 'Teknik Industri' ? 'selected' : '' ); ?>>Teknik Industri</option>
            </optgroup>
            <optgroup label="FKIP">
                <option value="Bahasa Inggris" <?= ($mahasiswa['jurusan'] == 'Bahasa Inggris' ? 'selected' : '' ); ?>>Bahasa Inggris</option>
            </optgroup>
            <optgroup label="FE">
                <option value="Manajemen" <?= ($mahasiswa['jurusan'] == 'Manajemen' ? 'selected' : '' ); ?>>Manajemen</option>
            </optgroup>
        </select>
        <small class="block text-danger"><?= form_error('jurusan'); ?></small>
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Update</button>
    <button type="reset" class="btn btn-warning">Reset</button>

</form>

