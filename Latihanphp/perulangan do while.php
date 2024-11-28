<!DOCTYPE html>
<html>
    <head>
    <title>Perulangan for</title>
    </head>
    <body>
        <?php

$ulangi = 10;


do {
    echo "<p>Ini adalah Perulangan ke-$ulangi</p>";
    $ulangi--; 
} while ($ulangi > 0);
?>