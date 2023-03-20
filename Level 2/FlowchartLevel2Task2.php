<?php

$angka = array();
for ($i = 100; $i <= 1000; $i++) {
  $angka[] = $i;
}

$angkaterbesar = max($angka);


echo "Angka Terbesar Dari 100 Bilangan Adalah:  " . $angkaterbesar;
?>