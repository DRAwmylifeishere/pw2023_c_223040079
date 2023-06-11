<?php require('partials/headerbts.php'); ?>
<?php require('partials/nav2.php'); ?>

<div class="container mt-3">
  <h1>Tambah Menu</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="post">
        <div class="mb-3">
          <label for="gambar" class="form-label">Gambar</label>
          <input type="text" class="form-control" name="gambar" id="gambar" required>
        </div>
        <div class="mb-3 w-25">
          <label for="nama" class="form-label">Nama Menu</label>
          <input type="text" class="form-control" name="nama" id="nama" autofocus required>
        </div>
        <div class="mb-3">
          <label for="bahan" class="form-label">Bahan</label>
          <input type="text" class="form-control" name="bahan" id="bahan" required>
        </div>
        <div class="mb-3">
          <label for="cara membuat" class="form-label">Cara Membuat</label>
          <input type="text" class="form-control" name="caramembuat" id="cara membuat" required>
        </div>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data</button>
      </form>
    </div>
  </div>

</div>