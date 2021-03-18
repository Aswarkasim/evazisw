<div class="jumbotron bg-white">
  <div class="row text-center">
    <div class="container">
      <h1 class="font-weight-normal">Registrasi</h1>
      <div class="offset-2 col-md-6">
        <form action="<?= base_url('home/auth/register')  ?>" method="post">


          <?= validation_errors('<div class="text text-danger">', '</div>') ?>



          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Username</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="username" placeholder="Username" type="text" value="<?= set_value('username') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Nama Lengkap</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="namalengkap" placeholder="Username" type="text" value="<?= set_value('namalengkap') ?>">
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>No. KTP</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="no_ktp" placeholder="No. KTP" type="text" value="<?= set_value('no_ktp') ?>">
              </div>
            </div>
          </div>

          <div class="form-gorup">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Password</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="password" placeholder="Password" type="password" value="<?= set_value('password') ?>">
              </div>
            </div>
          </div><br>

          <div class="form-gorup">
            <div class="row">
              <div class="col-md-4">
                <label for="" class="pull-right"><strong>Retype Password</strong></label>
              </div>
              <div class="col-md-8">
                <input class="form-control" name="re_password" placeholder="Retype Password" type="password" value="<?= set_value('re_password') ?>">
              </div>
            </div>
          </div><br>


          <button class="btn btn-success" type="submit"><i class="fa fa-folder"></i> Registrasi</button><br><br>
          <p>Sudah punya akun? silakan <a href="<?= base_url('home/auth') ?>">Login</a></p>
          <p class="mt-5 mb-3 text-muted">© 2020</p>


        </form>
      </div>
    </div>
  </div>
</div>