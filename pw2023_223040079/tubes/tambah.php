<?php
require('functions.php');

// Insert Data Ke Tabel Menu Jika Tombol Di Klik

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo
    "<script>
    alert('Data Berhasil Ditambahkan');
    document.location.href = 'admin.php';
    </script>";
  }
}


require('partials/tambah.view.php');
