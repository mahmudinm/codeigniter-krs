<form action="<?= base_url(); ?>index.php/matakuliah/store" method="POST" role="form">
    <legend>Tambah Data Matakuliah</legend>

    <div class="form-group <?php echo (form_error('nama') ? 'has-error' : '') ?>">
        <label for="nama">Nama Matakuliah</label>
        <input type="text" class="form-control" id="nama" name="nama" placeholder="Isikan Nama Matakuliah">
        <small class="block text-danger"><?= form_error('nama'); ?></small>
    </div>

    <div class="form-group <?php echo (form_error('semester') ? 'has-error' : '') ?>">
        <label for="semester">Semester</label>
        <input type="text" class="form-control" id="semester" name="semester" placeholder="Isikan Semester" value="<?= set_value('semester'); ?>">
        <small class="block text-danger"><?= form_error('semester'); ?></small>
    </div>    

    <div class="form-group <?php echo (form_error('sks') ? 'has-error' : '') ?>">
        <label for="sks">SKS</label>
        <input type="text" class="form-control" id="sks" name="sks" placeholder="Isikan SKS" value="<?= set_value('sks'); ?>">
        <small class="block text-danger"><?= form_error('sks'); ?></small>
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

