<?php
$bilangan1 = 1;
$bilangan2 = 4;
$bilangan3 = 3;


$terbesar = $bilangan1;
if ($bilangan2 > $terbesar) {
    $terbesar = $bilangan2;
}
if ($bilangan3 > $terbesar) {
    $terbesar = $bilangan3;
}


echo "Bilangan terbesar adalah: " . $terbesar;
?>