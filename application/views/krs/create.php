<form action="<?= base_url(); ?>index.php/krs/store" method="POST" role="form">
    <legend>Pengisian KRS</legend>

    <div class="form-group <?php echo (form_error('nama') ? 'has-error' : '') ?>">
        <label for="nama">Nama Mahasiswa</label>
        <select name="" id="input" class="form-control" required="required">
        <?php foreach ($mahasiswas as $mahasiswa): ?>
            <option value="<?= $mahasiswa->nama; ?>">(<?= $mahasiswa->nim ?>) <?= $mahasiswa->nama; ?></option>
        <?php endforeach ?>
        </select>
        <small class="block text-danger"><?= form_error('nama'); ?></small>
    </div>

    <?php foreach ($matakuliahsm as $s): ?>
        <h3>Semester <?= $s->semester; ?></h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Pilih</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    <?php endforeach ?>

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

