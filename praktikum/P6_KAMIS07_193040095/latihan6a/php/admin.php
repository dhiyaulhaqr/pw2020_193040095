<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$p = query("SELECT * FROM pakaian");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6a</title>
    <link rel="stylesheet" href="style.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!-- my css -->
      <link rel="stylesheet"  href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
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
<body bgcolor="	#FFE4E1">
    <table border="1" cellpadding="13" cellspacing="0">
        <tr bgcolor="#FFDAB9">
            <th>#</th>
            <th>Opsi</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Ukuran</th>
            <th>Warna</th>
            <th>Stok</th>
            <th>Harga (Rp.)</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($p as $pakaian) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <a href=""><button>Ubah</button></a>
                    <a href=""><button>Hapus</button></a>
                </td>
                
                <td><img src="../assets/img/<?= $pakaian['Foto']; ?>" alt=""></td>
                <td><?= $pakaian ["Nama"]; ?></td>
                <td><?= $pakaian ["Ukuran"]; ?></td>
                <td><?= $pakaian ["Warna"]; ?></td>
                <td><?= $pakaian ["Stok"]; ?></td>
                <td><?= $pakaian ["Harga"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>