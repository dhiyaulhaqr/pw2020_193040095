<?php
    function hitungDeterminan($nilai1, $nilai2, $nilai3, $nilai4) {
        // baris code perhitung determinan

        //menampilkan matriks
        echo "<table style='border-left:1px solid black; border-right:1px solid black;' cellspacing='5' cellpadding='5'>
            <tr>
                <td>$nilai1</td>
                <td>$nilai2</td>
            </tr>
            <tr>
                <td>$nilai3</td>
                <td>$nilai4</td>
            </tr>
        </table>";
        echo "Determinan dari matriks tersebut adalah".(($nilai1*$nilai4)-($nilai3*$nilai2)); //menampilkan teks dibawah matriks
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php hitungDeterminan(1,2,3,4) ?> <!-- Memanggil function hitungDeterminan -->
</body>
</html>