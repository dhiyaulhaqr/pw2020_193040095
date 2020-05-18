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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body bgcolor="lavender">
    <div class="container">
        <div class="gambar">
            <img width="200px" src="../assets/img/<?= $pakaian["Foto"]; ?>" ; alt="">
        </div>
    <div class="keterangan">
        <p><?= $pakaian["Nama"]; ?></p>
        <p><?= $pakaian["Ukuran"]; ?></p>
        <p><?= $pakaian["Warna"]; ?></p>
        <p><?= $pakaian["Stok"]; ?></p>
        <p><?= $pakaian["Harga"]; ?></p>
    </div>

        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
    
</body>
</html>