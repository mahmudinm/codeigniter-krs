<form action="<?= base_url(); ?>index.php/krs/store" method="POST" role="form">
    <legend>Pengisian KRS</legend>

    <div class="form-group <?php echo (form_error('mahasiswa') ? 'has-error' : '') ?>">
        <label for="mahasiswa">Nama Mahasiswa</label>
        <select name="mahasiswa" id="input" class="form-control" required="required">
        <?php foreach ($mahasiswas as $mahasiswa): ?>
            <option value="<?= $mahasiswa->nama; ?>">(<?= $mahasiswa->nim ?>) <?= $mahasiswa->nama; ?></option>
        <?php endforeach ?>
        </select>
        <small class="block text-danger"><?= form_error('mahasiswa'); ?></small>
    </div>

    <small class="block text-danger"><?= form_error('matakuliah'); ?></small>
    <?php foreach ($matakuliahsm as $sm): ?>
        <h3>Semester <?= $sm->semester; ?></h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Pilih</th>
                    <th>Nama Matakuliah</th>
                    <th>SKS</th>
                </tr>
            </thead>
                <?php $this->load->model('m_matakuliah'); ?>
                <?php $matakuliah = $this->m_matakuliah->nama($sm->semester); ?>
                <?php foreach ($matakuliah as $m): ?>
                    <tr>
                        <td><input type="checkbox" name="matakuliah[]" value="<?= $m->nama; ?>" title="<?= $m->sks; ?>"></td>
                        <td><?= $m->nama; ?></td>
                        <td>
                            <?= $m->sks; ?>
                        </td>
                    </tr>
                <?php endforeach ?>
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


    <div class="form-group">
        <label for="mahasiswa">Jumlah SKS</label>
        <input type="text" name="sks" id="sks" class="form-control" title="sks">
    </div>


    <br>

    <button type="submit" class="btn btn-primary">Tambah</button>
    <button type="reset" class="btn btn-warning">Reset</button>

</form>

