<?php
    // mengecek apakah ada id yang dikirimkan
    // jika tidak maka akan dikembalikan ke halaman index.php
    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    // mengambil id dari url
    $id = $_GET ['id'];

    // melakukan query dengan parameter id yang diambil dari url
    $pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link rel="stylesheet" href="style.css">

     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!-- my css -->
      <link rel="stylesheet"  href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body bgcolor="lavender">
    <div class="container" style="text-align: center;">
        <div class="gambar" style="margin-top: 10px">
            <img width="200px" src="../assets/img/<?= $pakaian["Foto"]; ?>" ; alt="">
        </div>
    <div class="keterangan">
        <p><?= $pakaian["Nama"]; ?></p>
        <p><?= $pakaian["Ukuran"]; ?></p>
        <p><?= $pakaian["Warna"]; ?></p>
        <p><?= $pakaian["Stok"]; ?></p>
        <p><?= $pakaian["Harga"]; ?></p>
    </div>

        <button class="waves-effect indigo accent-1 btn-small">
         <i class="material-icons right">arrow_back</i><a href="../index.php" style="color: white">Kembali</a></button>
    </div>
    
</body>
</html>