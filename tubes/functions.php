<?php
function koneksi()
{
  $conn = mysqli_connect("localhost", "root", "");
  mysqli_select_db($conn, "users");
  return $conn;
}

$makanan = [
  [
    "nama" => "Rendang", "bahan" => "Daging Rendang, Santen, Bumbu Instant, Gula, Garam", "cara_membuat" => "1. Tumis bumbu instant sampai harum lalu masukkan daging, aduk rata. 2. Masukkan santan, aduk rata. 3. Tambahkan gula dan garam sesuai selera. 4. Masak sampai daging empuk dan bumbu mengering.", "gambar" => "rendang.jpg",
  ],
  [
    "nama" => "Gulai", "bahan" => "Daging Iga, Kacang Merah, Santen, Bumbu Instant, Gula, Garam", "cara_membuat" => "1. Tumis bumbu instant sampai harum lalu masukkan daging dan kacang merah, aduk rata. 2. Masukkan santan, aduk rata. 3. Tambahkan gula dan garam sesuai selera. 4. Masak sampai matang.", "gambar" => "gulai.jpg",
  ],
  [
    "nama" => "SaydehTT", "bahan" => "Tahu, Tempe, Santen, Bumbu Instant, Gula, Garam, Daun Salam", "cara_membuat" => "1. Tumis bumbu instant dan saun salam sampai harum lalu masukkan tahu dan tempe, aduk rata. 2. Masukkan santan, aduk rata. 3. Tambahkan gula dan garam sesuai selera. 4. Masak sampai matang.", "gambar" => "lodeh.jpg",
  ],
  [
    "nama" => "Opay", "bahan" => "Potongan Ayam, Santen, Bumbu Instant, Gula, Garam, Daun Salam, Daun Sereh", "cara_membuat" => "1. Tumis bumbu instant, daun salam, dan daun sereh sampai harum lalu masukkan ayam, aduk rata. 2. Masukkan santan, aduk rata. 3. Tambahkan gula dan garam sesuai selera. 4. Masak sampai matang.", "gambar" => "opor.jpg",
  ],
  [
    "nama" => "SopIgaKM", "bahan" => "Daging Iga, Kacang Merah, Bumbu Instant, Garam", "cara_membuat" => "1. Tumis bumbu instant sampai harum lalu masukkan daging dan kacang merah, aduk rata. 2. Tambahkan garam sesuai selera. 3. Masak sampai matang.", "gambar" => "sop iga.jpg",
  ],
];


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
