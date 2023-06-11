<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "", "users");
  mysqli_select_db($conn, "users");
  return $conn;
};

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

$makanan = query("SELECT * FROM menu ");

function registrasi($data)
{

  $conn = koneksi();

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);

  // Cek Username

  $result = mysqli_query($conn, "SELECT username FROM data WHERE username = '$username'");

  if (mysqli_fetch_assoc($result)) {
    echo "<script>
      alert('username sudah terdaftar!');
      </script>";

    return false;
  }

  // Cek Konfirmasi Password

  if ($password !== $password2) {
    echo
    "<script>
            alert('Konfirmasi password salah');
      </script>";
    return false;
  };

  // Enkripsi Password

  $password = password_hash($password, PASSWORD_DEFAULT);

  // Tambah Ke Database

  mysqli_query($conn, ("INSERT INTO data VALUES(NULL, '$username', '$password', 'user')"));
  echo "<script>
  alert('Success')
  </script>";
  return mysqli_affected_rows($conn);
};

function error($message)
{
  echo "<script>
          alert('Error');
        </script>";
}

function tambah($data)
{
  $conn = koneksi();

  $nama = $data['nama'];
  $bahan = $data['bahan'];
  $cara_membuat = $data['caramembuat'];
  $gambar = $data['gambar'];

  $query = "INSERT into
              menu
            VALUES 
              (NULL, '$gambar', '$nama', '$bahan', '$cara_membuat', 1)";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}
