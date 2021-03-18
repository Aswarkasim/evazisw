<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalForPribadi">
  <i class="fa fa-edit"></i> Edit
</button>


<!-- Modal -->
<div class="modal fade" id="exampleModalForPribadi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?= form_open('user/akun/edit') ?>
      <form method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Data Akun</h5>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="">No. KTP</label>
            <input type="text" class="form-control" name="no_ktp" value="<?= $user->no_ktp; ?>" required placeholder="No. KTP">
          </div>

          <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" class="form-control" name="namalengkap" value="<?= $user->namalengkap; ?>" required placeholder="Nama Lengkap">
          </div>

          <div class="form-group">
            <label for="">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" value="<?= $user->tempat_lahir; ?>" required placeholder="Tempat Lahir">
          </div>

          <div class="form-group">
            <label for="">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="<?= $user->tanggal_lahir; ?>" required placeholder="Tanggal Lahir">
          </div>

          <div class="form-group">
            <label for="">Jenis Kelamin</label>
            <select name="jenis_kelamin" required class="form-control" id="">
              <option value="">-- Jenis Kelamin --</option>
              <option value="Laki-laki" <?= $user->jenis_kelamin == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
              <option value="Perempuan" <?= $user->jenis_kelamin == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
            </select>
          </div>

          <div class="form-group">
            <label for="">Agama</label>
            <input type="text" class="form-control" name="agama" value="<?= $user->agama; ?>" required placeholder="Agama">
          </div>

          <div class="form-group">
            <label for="">No. Hp</label>
            <input type="text" class="form-control" name="no_hp" value="<?= $user->no_hp; ?>" required placeholder="No. Hp">
          </div>

          <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" name="alamat" value="<?= $user->alamat; ?>" required placeholder="Alamat">
          </div>




        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </form>
      <?= form_close() ?>
    </div>
  </div>
</div>