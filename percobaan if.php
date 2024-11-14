<!DOCTYPE html>
<html>
    <head>
        <title>Percobaan if</title>
    </head>
    <body>
    <?php
function cekAngkaIf($angka) {
    if ($angka > 10) {
        echo "Angka lebih besar dari 10\n";
    }
}

$angka = 15;  
cekAngkaIf($angka);
?>
