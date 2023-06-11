<?php
session_start();
require 'functions.php';
$conn = koneksi();

// Cek Cookie
if (isset($_COOKIE['id']) && $_COOKIE['key']) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // Ambil Username Berdasarkan Id

  $result = mysqli_query($conn, "SELECT username FROM data WHERE  id = $id");
  $row = mysqli_fetch_assoc($result);

  // Cek Cookie dan Username

  if ($key === hash('gost', $row['username'])) {
    $_SESSION['login'] = true;
  }
}

if (isset($_SESSION["login"])) {
  header("Location:index.php");
  exit;
}

$conn = koneksi();

if (isset($_POST["login"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM data WHERE username = '$username'");

  // Cek Username
  if (mysqli_num_rows($result) === 1) {
    $qry = mysqli_fetch_array($result);
    // Cek Password
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
    }
    // Cek RememberMe
    if (isset($_POST['remember'])) {
      // Buat Cookie
      setcookie('id', $row['id'], strtotime('1day'));
      setcookie('key', hash('gost', $row['username']), strtotime('1day'));
    }

    if ($qry['role'] == 'admin') {
      // Cek Password
      $row = mysqli_fetch_assoc($result);
      if (password_verify($password, $row["password"])) {
      }
      // Set Session
      $_SESSION['admin'] = true;
      // Direct to Admin Page
      header("Location:admin.php");
    } else {
      // Set SESSION
      $_SESSION["login"] = true;
      // Direct to User Page
      header('location:index.php');
    }
    exit();
  }

  $error = true;
}

$conn = koneksi();
?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login1.css" !important>
  <link rel="stylesheet" href="css/style.css">
  <title>Login</title>
</head>

<body style="background-color: #726cf8;
  background-image: linear-gradient(315deg, #726cf8 0%, #e975a8 74%);">
  <?php if (isset($error)) : ?>
    <h1 style="color:red; font-style:italic; text-align:center; font-weight: bold;">Username atau password salah!</h1>
  <?php endif; ?>
  <div class="judul" style="text-align: center;
  line-height: 1.6rem;
  color: white;
  font-weight: 400;
  font-style: italic;
  font-family: 'Poppins', sans-serif;
  font-size : 2rem;
  padding-top: 10rem;
  padding-bottom: 2rem;">
    <h1>Resep <span style="color: purple;">Ma'ntul</span></h1>
  </div>

  <div class="login-container">
    <button onclick="document.getElementById('id01').style.display='block'" style="width: auto" name="login" class="logbut">
      Login
    </button>

    <div style="text-align: center; 
      line-height: 1.6rem;
      color: white;
      font-weight: 400;
      font-style: italic;
      font-family: 'Poppins', sans-serif;
      padding-top:0.5rem;
      text-shadow: #ff0000 1px;">
      <h2>Silahkan <span>Login</span></h2>
    </div>

    <div id="id01" class="modal">
      <form class="modal-content animate" action="" method="post">
        <div class="container">
          <label for="username"><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" id="username" required />

          <label for="password"><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" id="password" required />

          <button type="submit" name="login">Login</button>
          <label for="remember" name="remember">
            <input type="checkbox" name="remember" id="remember" /> Remember
            me
          </label>
        </div>

        <div class="container">
          <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
            Cancel
          </button>
          <span class="psw "><a href="#">Forgot password?</a></span>
        </div>
      </form>
    </div>
  </div>
</body>

</html>