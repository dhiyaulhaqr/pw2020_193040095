<?php
session_start();

if(!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
    require 'functions.php';
    $id = $_GET['id'];
    $pakaian = query("SELECT * FROM pakaian WHERE id = $id")[0];

    if(isset($_POST['ubah'])){
        if(ubah($_POST) > 0) {
            echo "<script>
                alert('Data Berhasil diubah');
                document.location.href = 'admin.php';
            </script>";
        } else {
            echo "<script>
                alert('Data Gagal diubah');
                document.location.href = 'admin.php';
            </script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!-- my css -->
      <link rel="stylesheet"  href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="background-image: url(../assets/img/color.jpg); background-size:3000px;">
<section id="tambah" class="tambah">
          <div class="container" style="margin-top: 100px;">
          <div class="row">
          <div class="col offset-m3  s6  ">
          <form action="" method="post">
          <input type="hidden" name="id" value="<?= $pakaian['id']; ?>">
              <div class="card-panel m3 s6">
                <h5 style="text-align: center">Form Ubah Data</h5>
                <div class="input-field">
                    <input type="text" name="Foto" id="foto"
                    required class="validate" autocomplete="off" required value="<?= $pakaian['Foto']; ?>">
                    <label for="foto" class="active">Foto</label>
                </div>
                <div class="input-field">
                    <input type="text" name="Nama" id="nama"
                    required class="validate" autocomplete="off" required value="<?= $pakaian['Nama']; ?>"> 
                    <label for="nama" class="active">Nama</label>
                </div>
                <div class="input-field"> 
                    <label for="ukuran"></label>
                    <select class="browser-default" name="Ukuran" id="ukuran" required value="">
                    <option value="<?= $pakaian['Ukuran']; ?>">----------Pilih Ukuran----------</option>
                    <option value="All Size">All Size</option>
                    <option value="L">L</option>
                    <option value="M">M</option>
                    <option value="S">S</option>
                    <option value="XL">XL</option>
                    </select>
                </div>
                <div class="input-field"> 
                    <label for="warna"></label>
                    <select class="browser-default" name="Warna" id="warna" required value="">
                    <option value="<?= $pakaian['Warna']; ?>">----------Pilih Warna----------</option>
                    <option value="All Size">All Size</option>
                    <option value="Army">Army</option>
                    <option value="Dusty Pink">Dusty Pink</option>
                    <option value="Light Blue">Light Blue</option>
                    <option value="Grey">Grey</option>
                    <option value="Black">Black</option>
                    <option value="Maroon">Maroon</option>
                    <option value="White">White</option>
                    <option value="Choco">Choco</option>
                    <option value="Yellow">Yellow</option>
                    <option value="Cream">Cream</option>
                    <option value="Coklat Susu">Coklat-Susu</option>
                    <option value="Brown">Brown</option>
                    </select>
                </div>
                <div class="input-field">
                    <input type="text" name="Stok" id="stok" required value="<?= $pakaian['Stok']; ?>">
                    <label for="stok" class="active">Stok</label>
                </div>
                <div class="input-field">
                <input type="text" name="Harga" id="harga" required value="<?= $pakaian['Harga']; ?>">
                    <label for="harga" class="active">Harga</label>
                </div>
                
                <button type="submit" name="ubah" class="btn indigo accent-1">Ubah Data</button>
                <button type="submit" class="btn indigo accent-1">
                    <a href="admin.php" style="text-decoration: none; color: white;">Kembali</a>
                </button>
              </div>
          </form>
          </div>
          </div>
          </div>
    </section>
</body>
</html>