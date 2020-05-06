<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';
// melakukan query
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
  <title>document</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    table {
      border: 5px solid black;
    }

    td {
      text-align: center;
    }
  </style>

</head>

<body bgcolor="lavender" id="home" class="scrollspy">
  <!--navbar -->
  <div class="navbar-fixed">
    <nav class="indigo accent-1">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">Muhun Busana</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="https://www.google.com/maps/place/Kec.+Purwadadi,+Kabupaten+Subang,+Jawa+Barat/@-6.4408117,107.6143908,12z/data=!3m1!4b1!4m5!3m4!1s0x2e693ff1a7d60d21:0x6b2da51d11b2b4e7!8m2!3d-6.4435345!4d107.680727">Location</a></li>
            <li><a href="https://www.instagram.com/muhunbusanapwd/">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <form class="col s2" action="" method="get">
    <div class="row">
      <div class="input-field col s2">
        <input type="text" name="keyword">
        <button class="btn waves-effect waves-light" type="submit" name="cari">Cari
          <i class="material-icons right">search</i>
        </button>
      </div>
    </div>
  </form>
  <table border="5" cellpadding="13" cellspacing="0">
    <?php if (empty($pakaian)) : ?>
      <h1>Data tidak ditemukan</h1>
    <?php else : ?>
    <tr>
      <td>
        <?php foreach ($pakaian as $p) : ?>
          <p class="nama">
            <a href="php/detail.php?id=<?= $p['id'] ?>">
              <?= $p["Nama"] ?>
            </a>
          </p>
        <?php endforeach; ?>
      <?php endif; ?>
      </td>
    </tr>
  </table>
  <a href="php/login.php" class="waves-effect waves-light btn #f06292 pink lighten-2">Masuk ke halaman admin</a>
</body>

</html>