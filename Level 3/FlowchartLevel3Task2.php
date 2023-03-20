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

<H1>INPUT</H1>


<br>
    <form action="" method="post">
        <tr>
            <td><label for="username">BIL 1 </label></td>
            <td><input type="number" name="bilangan1" ></td>
        </tr>
        <tr>
            <td><label for="password">BIL 2 </label></td>
            <td><input type="number" name="bilangan2" ></td>
        </tr>
        <tr>
            <td><label for="password">BIL 3 </label></td>
            <td><input type="number" name="bilangan3" ></td>
        </tr>
        <tr>
            <td><button type="submit" name="submit">INPUT</button></td>
        </tr>
    </form>
</table>

</center>
<center>


<?php
// Input 3 buah bilangan bulat


// Cari bilangan dengan nilai tengah

if(isset($_POST["submit"])){


    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
    $bilangan3 = $_POST['bilangan3'];


    echo "bilangan ke-1: $bilangan1";
    echo "<br>";
    echo "bilangan ke-2: $bilangan2";
    echo "<br>";
    echo "bilangan ke-3: $bilangan3";
    echo "<br>";
    echo "<br>";

if ($bilangan1 > $bilangan2) {
    if ($bilangan2 > $bilangan3) {
        $nilai_tengah = $bilangan2;
    } elseif ($bilangan1 > $bilangan3) {
        $nilai_tengah = $bilangan3;
    } else {
        $nilai_tengah = $bilangan1;
    }
} else {
    if ($bilangan1 > $bilangan3) {
        $nilai_tengah = $bilangan1;
    } elseif ($bilangan2 > $bilangan3) {
        $nilai_tengah = $bilangan3;
    } else {
        $nilai_tengah = $bilangan2;
    }
}

// Cetak bilangan dengan nilai tengah
echo "Bilangan dengan nilai tengah adalah: " . $nilai_tengah . "\n";

}
?></center>
</body>
</html>