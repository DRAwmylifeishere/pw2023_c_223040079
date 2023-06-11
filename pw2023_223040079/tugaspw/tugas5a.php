<?php

$mahasiswa =
    [
        [
            "nama" => "Muhammad Indra Krishna",
            "nrp" => "223040079",
            "jurusan" => "Teknik Informatika",
            "email" => "indrakrishna684@gmail.com"
        ],

        [
            "nama" => "Muhammad Daffa Musyaffa",
            "nrp" => "223040048",
            "jurusan" => "Teknik Informatika",
            "email" => "daffa02@gmail.com"
        ],

        [
            "nama" => "Rangga Dhani Hermawan",
            "nrp" => "223040063",
            "jurusan" => "Teknik Informatika",
            "email" => "ranggadhani@gmail.com"
        ],

        [
            "nama" => "Ivan Bayu Pratama",
            "nrp" => "223040057",
            "jurusan" => "Teknik Informatika",
            "email" => "ivanbayu@gmail.com"
        ],

        [
            "nama" => "Sandy Nugraha",
            "nrp" => "223040047",
            "jurusan" => "Teknik Informatika",
            "email" => "sandynugraha@gmail.com"
        ],

        [
            "nama" => "Fikriyawan Nugraha",
            "nrp" => "223040058",
            "jurusan" => "Teknik Informatika",
            "email" => "fikri@gmail.com"
        ],

        [
            "nama" => "Nagar Rasyid Erdiansyah",
            "nrp" => "2230400549",
            "jurusan" => "Teknik Informatika",
            "email" => "nagar@gmail.com"
        ],

        [
            "nama" => "Miftah Fauzi",
            "nrp" => "223040039",
            "jurusan" => "Teknik Informatika",
            "email" => "miftahfauzi@gmail.com"
        ],

        [
            "nama" => "Muhammad Raihan Nagata Akbar",
            "nrp" => "223040054",
            "jurusan" => "Teknik Informatika",
            "email" => "raihannagata@gmail.com"
        ],

        [
            "nama" => "Muhammad Pandu Permana",
            "nrp" => "223040042",
            "jurusan" => "Teknik Informatika",
            "email" => "muhpandu@gmail.com"
        ],


    ]

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Data Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama : <?php echo $mhs["nama"]; ?></li>
            <li>NRP : <?php echo $mhs["nrp"]; ?></li>
            <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
            <li>Email : <?php echo $mhs["email"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>