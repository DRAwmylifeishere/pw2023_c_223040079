<?php

require('functions.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link rel="stylesheet" href="css/more.css">

<body>

  <!-- Navbar Start-->
  <nav class="navbar">
    <a href="#" class="navbar-logo"><span id="admin">Detail</span> Resep <span>Ma'ntul</span></a>

    <div class="navbar-nav">
      <a href="registrasi.php">Logout</a>
    </div>

    <div class="navbar-extra">
      <a href="#" id="search"><i data-feather="search"></i></a>
      <a href="#" id="book open"><i data-feather="book-open"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->

  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Gambar</th>
        <th scope="col">Nama</th>
        <th scope="col">Bahan</th>
        <th scope="col">Cara Membuat</th>
      </tr>
    </thead>
    <tbody>
      <?php $i = 1; ?>
      <?php foreach ($makanan as $makan) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td>
            <img src="img/<?= $makan['gambar']; ?>" width="50">
          </td>
          <td><?= $makan['nama']; ?></td>
          <td><?= $makan['bahan']; ?></td>
          <td><?= $makan['cara membuat']; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <footer>
    <div class="socials">
      <a href="www.instagram.com/draakrsh"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
      <a href="#"><i data-feather="github"></i></a>
    </div>

    <div class="links">
      <a href="index.php">Kembali Ke Halaman Utama</a>
    </div>

    <div class="credits">
      <p>Created by <a href="#">Indra Krishna</a>. | &copy; 2023.</p>
    </div>
  </footer>
</body>