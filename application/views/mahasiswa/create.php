<form action="<?= base_url(); ?>index.php/mahasiswa/store" method="POST" role="form">
    <legend>Tambah Data Mahasiswa</legend>

    <div class="form-group <?php echo (form_error('nim') ? 'has-error' : '') ?>">
        <label for="nim">Nim</label>
        <input type="text" class="form-control" id="nim" name="nim" placeholder="Isikan NIM" value="<?= set_value('nim'); ?>">
        <small class="block text-danger"><?= form_error('nim'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('nama') ? 'has-error' : '') ?>">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama" value="<?= set_value('nama'); ?>">
        <small class="block text-danger"><?= form_error('nama'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('semester') ? 'has-error' : '') ?>">
        <label for="semester">Semester</label>
        <input type="text" class="form-control" id="semester" name="semester" placeholder="Isikan Semester" value="<?= set_value('semester'); ?>">
        <small class="block text-danger"><?= form_error('semester'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('ipk') ? 'has-error' : '') ?>">
        <label for="ipk">IPK</label>
        <input type="text" class="form-control" id="ipk" name="ipk" placeholder="Isikan IPK" value="<?= set_value('ipk'); ?>">
        <small class="block text-danger"><?= form_error('ipk'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('fakultas') ? 'has-error' : '') ?>">
        <label for="fakultas">Fakultas</label>
        <select name="fakultas" id="fakultas" class="form-control" required="required">
            <option value="Teknik">Teknik</option>
            <option value="FKIP">FKIP</option>
            <option value="FE">FE</option>
        </select>
        <small class="block text-danger"><?= form_error('fakultas'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('jurusan') ? 'has-error' : '') ?>">
        <label for="jurusan">Jurusan</label>
        <select name="jurusan" id="jurusan" class="form-control" required="required">
            <optgroup label="Teknik">
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Kimia">Teknik Kimia</option>
                <option value="Teknik Industri">Teknik Industri</option>
            </optgroup>
            <optgroup label="FKIP">
                <option value="Bahasa Inggris">Bahasa Inggris</option>
            </optgroup>
            <optgroup label="FE">
                <option value="Manajemen">Manajemen</option>
            </optgroup>
        </select>
        <small class="block text-danger"><?= form_error('jurusan'); ?></small>
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Tambah</button>
    <button type="reset" class="btn btn-warning">Reset</button>

</form>

