<?php
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id', '', strtotime('-2days'));
setcookie('key', '', strtotime('-2days'));

header("Location:registrasi.php");
