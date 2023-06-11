<?php
require 'functions.php';
$conn = koneksi();

if (isset($_POST["register"])) {

  if (registrasi($_POST) > 0) {
    echo "<script>
            alert('user baru berhasil ditambahkan!')x ;
          </script>";
  } else {
    echo mysqli_error($conn);
  }
}


?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/registrasi.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />
  <title>Regist</title>
  <h1 class="judul">Resep <span>Ma'ntul</span></h1>
</head>


<body style="background-color: #726cf8;
  background-image: linear-gradient(315deg, #726cf8 0%, #e975a8 74%);">

  <form action="" method="post">
    <div class="regist">
      <ul>
        <li>
          <label>
            Username
            <input type="text" name="username" id="username">
          </label>
        </li>
        <li>
          <label>
            Password
            <input type="password" name="password" id="password">
          </label>
        </li>
        <li>
          <label>
            Konfirmasi Password
            <input type="password" name="password2" id="password2">
          </label>
        </li>
        <button type="submit" name="register">Regist</button>
      </ul>
  </form>
  </div>
  <div class="login">
    <ul>
      <li><a href="login.php">Sudah Punya Akun?</a></li>
    </ul>
  </div>

</body>

</html>