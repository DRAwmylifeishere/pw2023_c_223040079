<?php
session_start();

if (!isset($_SESSION["login"])) {
  header("Location:registrasi.php");
  exit;
}

require('functions.php');
require('partials/header.php');
require('partials/nav.php');
$conn = koneksi();
?>

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
      <img src="img/tentang-kami.jpg" alt="About Us" />
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

<?php
require("partials/footer.php")
?>
<!-- Icon end -->
<script>
  feather.replace();
</script>

<script src="js/script.js"></script>

</html>