<!-- Search Widget -->
<div class="card">
  <h5 class="card-header">Search</h5>
  <div class="card-body">
    <form action="<?= base_url('home/berita/cari'); ?>" method="POST">
      <div class="input-group">
        <input type="text" class="form-control" name="key" placeholder="Cari Berita..">
        <span class="input-group-btn">
          <button class="btn btn-primary" type="submit">Cari</button>
        </span>
      </div>
    </form>
  </div>
</div>