<?php

echo "<h4> Menghitung Luas Lingkaran </h4>";
function hitungLuasLingkaran($r)
{
    
    echo "jari-jari : $r cm";
    echo "<br>";
    
    $hasil = 3.14 * $r * $r;
    echo "Luas Lingkaran : $hasil";
    
}
echo hitungKelilingLingkaran(20);
echo "<hr>";

echo "<h4>Menghitung Keliling Lingkaran</h4> ";
function hitungKelilingLingkaran($r)
{
   
    echo "jari-jari : $r cm";
    echo "<br>";

    $hasil = 2 * 3.14 * $r;
    echo "Keliling Lingkaran : $hasil";

}

echo hitungLuasLingkaran(10);
echo "<hr>";

?>