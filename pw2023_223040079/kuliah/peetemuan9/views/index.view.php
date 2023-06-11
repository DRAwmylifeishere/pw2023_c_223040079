<?php
require('partials/header.php');
require('partials/nav.php');
?>

<div class="container">
  <h1>Halaman Home</h1>
</div>

<h3>Daftar Mahasiswa</h3>

<?php foreach ($students as $student) : ?>
  <ul>
    <li>
      <?= $student["nama"]; ?>
    </li>
    <li>
      <?= $student["npm"]; ?>
    </li>
    <li>
      <?= $student["email"]; ?>
    </li>
  </ul>
<?php endforeach; ?>

<?php require('partials/footer.php') ?>