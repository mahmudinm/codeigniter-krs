<form action="<?= base_url(); ?>index.php/krs/store" method="POST" role="form">
    <legend>Pengisian KRS</legend>

    <div class="form-group <?php echo (form_error('nama') ? 'has-error' : '') ?>">
        <label for="nama">Nama Mahasiswa</label>
        <select name="" id="input" class="form-control" required="required">
        <?php foreach ($mahasiswas as $mahasiswa): ?>
            <option value="<?= $mahasiswa->nama; ?>"><?= $mahasiswa->nama; ?></option>
        <?php endforeach ?>
        </select>
        <small class="block text-danger"><?= form_error('nama'); ?></small>
    </div>


    <div class="panel-group driving-license-settings" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                 <h4 class="panel-title">
                                          <div class="checkbox">
                    <label data-toggle="collapse" data-target="#collapseOne">
                        <input type="checkbox"/> I have Driver License  
                    </label>
                </div>
                                      </h4>

            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                asd
                </div>
            </div>
        </div>
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
