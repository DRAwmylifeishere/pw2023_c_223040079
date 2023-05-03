<?php
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Resep Ma'ntul</title>

  <!-- Font -->

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

  <!-- Icon start -->

  <script src="https://unpkg.com/feather-icons"></script>

  <!-- Style -->

  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- Navbar Start-->
  <nav class="navbar">
    <a href="#" class="navbar-logo">Resep <span>Ma'ntul</span></a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#recipe">Recipe</a>
      <button onclick="document.getElementById('id01').style.display='block'" style="width: auto">
        Login
      </button>

      <div id="id01" class="modal">
        <form class="modal-content animate" action="/login.php" method="post">
          <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required />

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required />

            <button type="submit"><a>Login</a></button>
            <label>
              <input type="checkbox" checked="checked" name="remember" /> Remember
              me
            </label>
          </div>

          <div class="container" style="background-color: #f1f1f1">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">
              Cancel
            </button>
            <span class="psw">Forgot <a href="#">password?</a></span>
          </div>
        </form>
      </div>
    </div>

    <div class="navbar-extra">
      <a href="#" id="search"><i data-feather="search"></i></a>
      <a href="#" id="book open"><i data-feather="book-open"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- Navbar End -->

  <!-- Hero Section Start -->
  <section class="hero" id="home">
    <main class="content">
      <h1>
        <span style="color: white" ;> Sensasi</span> <span>Rasa</span> Masakan
        Emak
      </h1>
      <p>
        Khusus Untuk Kalian Yang Rindu Masakan Ibu Kalian Kapanpun Dimanapun.
      </p>
      <a href="#" class="cta"> Beli Buku Resep </a>
    </main>
  </section>
  <!-- Hero Section End -->

  <!-- About Section Start -->
  <section id="about" class="about">
    <h2>About Us</h2>

    <div class="row">
      <div class="about-img">
        <img src="/img/tentang-kami.jpg" alt="About Us" />
      </div>
      <div class="content">
        <h3>Cita Rasa</h3>
        <p>
          Cita rasa masakan yang ngga akan pernah bisa kalian lupakan, membuat kalian teringat rasa kasih sayang ibu!
        </p>
        <p>
          Dengan bumbu dan rempah rempah pilihan, masakan kami mampu membuat kalian terbawa ke suasana nostalgia saat kalian masih kecil, dimana saat pulang bermain kalian akan disambut dengan aroma masakan yang khas tiada duanya.
        </p>
      </div>
    </div>
  </section>
  <!-- About Section End -->

  <!-- Menu Section Start -->
  <br id="recipe">
  <br>
  <br>
  <section class="menu">

    <h2>Resep Masakan</h2>
    <p>Sudah saatnya untuk nikmati rasa masakan Ma'ntul atau anda bisa coba sendiri dirumah.</p>
  </section>

  <div class="daftar">
    <?php foreach ($makanan as $m) : ?>
      <div class="menu-card">
        <ul>
          <li class="gambar"><img src="img/<?= $m["gambar"]; ?>"></li>
          <a href="#recipe">
            <li class="namautama"> <?= $m["nama"] ?>
          </a>
          <!-- <li> Bahan : <?= $m["bahan"] ?></li> -->
          <!-- <li> Cara Membuat : <?= $m["cara_membuat"] ?></li> -->
        </ul>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="more">
    <a href="#">
      <h1> More</h1>
    </a>
  </div>

  <!-- Menu Section End -->

</body>

<footer>
  <div class="socials">
    <a href="www.instagram.com/draakrsh"><i data-feather="instagram"></i></a>
    <a href="#"><i data-feather="facebook"></i></a>
    <a href="#"><i data-feather="github"></i></a>
  </div>

  <div class="links">
    <a href="#home">Home</a>
    <a href="#about">About Us</a>
    <a href="#menu">Menu</a>
  </div>

  <div class="credits">
    <p>Created by <a href="#">Indra Krishna</a>. | &copy; 2023.</p>
  </div>
</footer>
<!-- Icon end -->
<script>
  feather.replace();
</script>

<script src="js/script.js"></script>

</html>