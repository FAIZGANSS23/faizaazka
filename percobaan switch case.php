<!DOCTYPE html>
<html>
    <head>
        <title>Percobaan if</title>
    </head>
    <body>
    <?php
function cekHari($hari) {
    switch ($hari) {
        case 1:
            echo "Senin\n";
            break;
        case 2:
            echo "Selasa\n";
            break;
        case 3:
            echo "Rabu\n";
            break;
        case 4:
            echo "Kamis\n";
            break;
        case 5:
            echo "Jumat\n";
            break;
        case 6:
            echo "Sabtu\n";
            break;
        case 7:
            echo "Minggu\n";
            break;
        default:
            echo "Hari tidak valid\n";
    }
}

$hari = 3;  
cekHari($hari);
?>
