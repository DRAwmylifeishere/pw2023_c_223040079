<?php
session_start();

if (!isset($_SESSION["admin"])) {
  header("Location:login.php");
  exit;
}

require('partials/header2.php');
require('partials/nav2.php');
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/login.css">
  <title>Admin</title>
</head>

<link rel="stylesheet" href="css/style.css">

<body>
  <h1 class="edit"><a href="tambah.php"> Tambah Resep</a></h1>
</body>

</html>