<?php

$nama_depan = "Indra";
$nama_belakang = "Krishna";


for ($number = 1; $number <= 100; $number++) {

    if ($number % 3 == 0 && $number % 5 == 0) {
        echo "$nama_depan $nama_belakang <br>";
    } 

    else if ($number % 3 == 0) {
        echo "$nama_depan <br>";
    } 

    else if ($number % 5 == 0) {
        echo "$nama_belakang <br>";
    } 

    else {
        echo "$number <br>";
    }
}

?>