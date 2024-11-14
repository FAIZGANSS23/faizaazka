<!DOCTYPE html>
<html>
    <head>
        <title>Percobaan if</title>
    </head>
    <body>
    <?php
function cekPositifNegatif($angka) {
    if ($angka > 0) {
        echo "Angka positif\n";
    } else {
        echo "Angka negatif atau nol\n";
    }
}

$angka = 4; 
cekPositifNegatif($angka);
?>
