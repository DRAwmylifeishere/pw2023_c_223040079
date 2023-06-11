<?php
require('functions.php');

$title = 'Form Tambah Data';

// Insert Data Ke Tabel Mahasiswa Jika Tombol Di Klik

if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo
    "<script>
    alert('Data Berhasil Ditambhakan');
    document.location.href = 'index.php';
    </script>";
  }
}


require('views/tambah.view.php');
