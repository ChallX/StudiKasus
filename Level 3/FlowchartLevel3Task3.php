<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<center>
<table>

<H1>Input Sisi</H1>


<br>
    <form action="" method="post">
        <tr>
            <td><label for="username">SISI A </label></td>
            <td><input type="number" name="sisi1" ></td>
        </tr>
        <tr>
            <td><label for="password">SISI B </label></td>
            <td><input type="number" name="sisi2" ></td>
        </tr>
        <tr>
            <td><label for="password">SISI C </label></td>
            <td><input type="number" name="sisi3" ></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">INPUT</button></td>
        </tr>
    </form>
</table>


</center>
<center>
<?php
// Input sisi-sisi segitiga


if(isset($_POST["submit"])){


$sisi1 = $_POST['sisi1'];
$sisi2 = $_POST['sisi2'];
$sisi3 = $_POST['sisi3'];

// Pengecekan sifat-sifat segitiga
if ($sisi1 == $sisi2 && $sisi1 == $sisi3) {
    echo " SEGITIGA SAMA SISI";
} elseif ($sisi1 == $sisi2 || $sisi1 == $sisi3 || $sisi2 == $sisi3) {
    echo "SEGITIGA SAMA KAKI";
} else {
    echo "SEGITIGA SEMBARANG";
}
}
?></center>
</body>
</html>