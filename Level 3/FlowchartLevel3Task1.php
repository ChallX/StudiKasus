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

if(isset($_POST["submit"])){


    $bilangan1 = $_POST['bilangan1'];
    $bilangan2 = $_POST['bilangan2'];
    $bilangan3 = $_POST['bilangan3'];

// Menyimpan bilangan ke dalam array
$bilangan = array($bilangan1, $bilangan2, $bilangan3);

// Mengurutkan array dari nilai terkecil ke terbesar
sort($bilangan);

// Mencetak bilangan secara urut
echo "Bilangan urut: ";
foreach ($bilangan as $b) {
    echo $b . " ";
}
}
?></center>

</body>
</html>

