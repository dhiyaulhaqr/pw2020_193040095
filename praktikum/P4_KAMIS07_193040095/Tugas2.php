<?php
    $pakaian = [
        [
         "foto" => "Blezer.jfif",
         "nama" => "Blezer",
         "ukuran" => "All size",
         "warna" => "Dusty Pink, Army, lightblue",
         "stok" => 321,
         "harga" => 230000
        ],
        [
         "foto" => "blues.jfif",
         "nama" => "Blues",
         "ukuran" => "S, M, L, XL",
         "warna" => "Dusty Pink, grey, lightblue",
         "stok" => 441,
         "harga" => 130000   
        ],
        [
         "foto" => "Celana Kulot.png",
         "nama" => "Kulot",
         "ukuran" => "All size",
         "warna" => "lightblue-grey",
         "stok" => 150,
         "harga" => 95000
        ],
        [
        "foto" => "Dress Casual.jfif",
         "nama" => "Dress Casual",
         "ukuran" => "All size",
         "warna" => "moca, coklat-susu, milo",
         "stok" => 200,
         "harga" => 120000
        ],
        [
        "foto" => "kemeja.jfif",
         "nama" => "Kemeja - serut",
         "ukuran" => "All size",
         "warna" => "white, black, maroon, milo",
         "stok" => 554,
         "harga" => 90000
        ],
        [
         "foto" => "Midi Dress.jfif",
         "nama" => "Midi Dress",
         "ukuran" => "M, L",
         "warna" => "yellow, pink, choco",
         "stok" => 250,
         "harga" => 110000
        ],
        [
         "foto" => "Rok.jfif",
         "nama" => "Rok Prisket",
         "ukuran" => "All size",
         "warna" => "Choco, Milo, Cream",
         "stok" => 542,
         "harga" => 75000
        ],
        [
         "foto" => "Sweater.jfif",
         "nama" => "Sweater",
         "ukuran" => "All size fit to XL",
         "warna" => "Brown, maroon, navy",
         "stok" => 300,
         "harga" => 90000
        ],
        [
         "foto" => "Tunik Blue.jfif",
         "nama" => "Tunik Blue",
         "ukuran" => "All size fit to XL",
         "warna" => "lightblue",
         "stok" => 200,
         "harga" => 150000
        ],
        [
         "foto" => "Tunik Vintage.jfif",
         "nama" => "Tunik Vintageg",
         "ukuran" => "All size fit to XL",
         "warna" => "milo, dark-blue, dark-grey",
         "stok" => 250,
         "harga" => 160000
        ],
        [
         "foto" => "hoodie.jfif",
         "nama" => "Hoodie",
         "ukuran" => "All size fit to XL",
         "warna" => "Milo, Cream, Black",
         "stok" => 350,
         "harga" => 250000
        ],
        [
         "foto" => "jogger.jfif",
         "nama" => "Celana Jogger",
         "ukuran" => "All size fit to XL",
         "warna" => "Black, Cream",
         "stok" => 233,
         "harga" => 165000
        ],
        [
         "foto" => "Pants.jfif",
         "nama" => "Celana Pants",
         "ukuran" => "All size fit to XL",
         "warna" => "Black, Army, Maroon ",
         "stok" => 432,
         "harga" => 200000
        ]
     ];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas2</title>
    <style>
        table{
            border: 1px solid black;
        }
        td, h2{
            text-align: center;
        }
        h1{
            text-align: justify;
        }
        img{
            height: 250px;
        }
    </style>
</head>
<body>
    <h1>MUHUN BUSANA</h1>
    <table border="1" cellpadding="3" cellspacing="0">
        <tr>
          <td align="center"><b>No.</b></td>
          <td align="center"><b>Foto</b></td>
          <td align="center"><b>Nama</b></td>
          <td align="center"><b>Ukuran</b></td>
          <td align="center"><b>Warna</b></td>
          <td align="center"><b>Stok</b></td>
          <td align="center"><b>Harga (Rp.)</b></td>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($pakaian as $p) : ?>
         <tr>
             <td align="center"><?=$i; ?></td>
             <td align="center"><img src="img/<?=$p["foto"]; ?>"></td>
             <td align="center"><?=$p["nama"]; ?></td>
             <td align="center"><?=$p["ukuran"]; ?></td>
             <td align="center"><?=$p["warna"]; ?></td>
             <td align="center"><?=$p["stok"]; ?></td>
             <td align="center"><?=$p["harga"]; ?></td>
         </tr>
         <?php $i++;?>
        <?php endforeach ?>
    </table>
</body>
</html>