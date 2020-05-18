<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $pakaian = query("SELECT * FROM pakaian WHERE
                Foto LIKE '%$keyword%' OR
                Nama LIKE '%$keyword%' OR
                Ukuran LIKE '%$keyword%' OR
                Warna LIKE '%$keyword%' OR
                Stok LIKE '%$keyword%' OR
                Harga LIKE '%$keyword%' ");
} else {
    $pakaian = query("SELECT * FROM pakaian");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas</title>
    <link rel="stylesheet" href="style.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!-- my css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        table {
            border: 1px solid black;
        }

        td,
        h2,
        h3 {
            text-align: center;
        }

        h1 {
            text-align: justify;
        }

        img {
            height: 250px;
        }
    </style>

</head>

<body bgcolor="#FFE4E1">

    <h3>Halaman Admin</h3>
    <br><br>

    <a href="logout.php">
        <button class="btn waves-effect waves-light" type="submit" name="submit">Log Out
            <i class="material-icons right">arrow_forward</i>
        </button>
    </a>
    <br><br><br>
    <div class="add">
        <a class="waves-effect waves-light btn" a href="tambah.php">
            <i class="material-icons left">add</i>Tambah Data</a>
        <br>
        <br>
        <div class="row">
            <div class="input-field col s4">
                <form action="" method="get">
                    <input type="text" name="keyword">
                    <button type="submit" name="cari">Cari!</button>
                </form>
            </div>
        </div>
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
            <?php if (empty($pakaian)) : ?>
                <tr>
                    <td colspan="8">
                        <h1 class="center">Data tidak ditemukan</h1>
                    </td>
                </tr>
            <?php else : ?>
                <?php $i = 1; ?>
                <?php foreach ($pakaian as $p) : ?>
                    <tr>
                        <td><?= $i; ?></td>
                        <td>
                            <a class="waves-effect waves-light btn" a href="ubah.php?id=<?= $p['id'] ?>">
                                <i class="material-icons right">create</i>Ubah</a>
                            <a class="waves-effect waves-light btn" a href="hapus.php?id=<?= $p['id'] ?>" onclick="return confirm('Hapus Data??')">
                                <i class="material-icons right">delete</i>Hapus</a></a>
                        </td>
                        <td><img src="../assets/img/<?= $p['Foto']; ?>" alt=""></td>
                        <td><?= $p["Nama"]; ?></td>
                        <td><?= $p["Ukuran"]; ?></td>
                        <td><?= $p["Warna"]; ?></td>
                        <td><?= $p["Stok"]; ?></td>
                        <td><?= $p["Harga"]; ?></td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            <?php endif  ?>

        </table>
</body>

</html>