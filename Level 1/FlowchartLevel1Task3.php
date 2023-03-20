<?php
$bilangan1 = 31;
$bilangan2 = 102;
$bilangan3 = 1221;
$bilangan4 = 0;

$terbesar = $bilangan1;
if ($bilangan2 > $terbesar) {
    $terbesar = $bilangan2;
}
if ($bilangan3 > $terbesar) {
    $terbesar = $bilangan3;
}
if ($bilangan4 > $terbesar) {
    $terbesar = $bilangan4;
}

echo "Bilangan terbesar adalah: " . $terbesar;
?>