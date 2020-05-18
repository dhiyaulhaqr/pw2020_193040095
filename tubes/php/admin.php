<?php
// menghubungkan dengan file php lainnya
require 'functions.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

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
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="style.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        table {
            border: 1px solid black;
            text-align: center;
        }

        td,
        h2,
        h3 {
            text-align: center;
        }
        th{
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

<body style="background-image: url(../assets/img/awan.jpg); background-size:cover; height:200%; background-position:center;background-repeat:no-repeat">
    <div class="navbar-fixed">
        <nav class="indigo accent-1">
            <div class="container">
                <div class="nav-wrapper">
                    <a href="#home" class="brand-logo">Halaman Admin</a>
                    <a href="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down" name="submit" type="submit">
                        <li><a href="logout.php">Log Out</a></li>
                        <li><a href="tambah.php">Tambah Data</a></li>
                    </ul>

                </div>
            </div>
        </nav>
    </div>
    <br>
    
        <div class="row">
            <div class="input-field col  s2">
                <form action="" method="get">
                    <input type="text" name="keyword" autocomplete="off">
                    <a class="waves-effect indigo accent-1 btn-small" type="submit" name="cari">Search
                    <i class="material-icons right">search</i></a>
                </form>
            </div>
        </div>
        <table border="1" cellpadding="13" cellspacing="0">
            <tr bgcolor="#FFDAB9" style="text-align: center">
                <th>No</th>
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
                            <a class="waves-effect indigo accent-1 btn-small" a href="ubah.php?id=<?= $p['id'] ?>">
                                <i class="material-icons right">create</i>Ubah</a>
                            <a class="waves-effect indigo accent-1 btn-small" a href="hapus.php?id=<?= $p['id'] ?>" onclick="return confirm('Hapus Data??')">
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
        <footer class="indigo accent-1 white-text center">
      <p> ©Dhiyaulhaqr - copyright2020</p>
    </footer>
</body>

</html>