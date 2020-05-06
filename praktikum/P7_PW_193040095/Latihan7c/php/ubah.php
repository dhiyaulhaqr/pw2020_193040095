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
    <title>Document</title>
</head>
<body bgcolor="	#FFE4E1">
    <h3>Form Ubah Data Pakaian</h3>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $pakaian['id']; ?>">
        <li>
            <label for="foto">Foto</label><br>
            <input type="text" name="Foto" id="foto" required value="<?= $pakaian['Foto']; ?>"><br><br>
        </li>
        <li>
            <label for="nama">Nama</label><br>
            <input type="text" name="Nama" id="nama" required value="<?= $pakaian['Nama']; ?>"><br><br>
        </li>
        <li>
            <label for="ukuran">Ukuran</label><br>
            <select name="Ukuran" id="ukuran" required value="">
                <option value="<?= $pakaian['Ukuran']; ?>">----------Pilih Ukuran---------</option>
                <option value="All Size">All Size</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="S">S</option>
                <option value="XL">XL</option>
            </select>
        </li>
        <br>
        <li>
            <label for="warna">Warna</label><br>
            <select name="Warna" id="warna" required value=""><br><br>
                <option value="<?= $pakaian['Warna']; ?>">-------Pilih Warna-------</option>
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
        </li>
        <br>
        <li>
            <label for="stok">Stok</label><br>
            <input type="text" name="Stok" id="stok" required value="<?= $pakaian['Stok']; ?>"><br><br>
        </li>
        <li>
            <label for="harga">Harga</label><br>
            <input type="text" name="Harga" id="harga" required value="<?= $pakaian['Harga']; ?>"><br><br>
        </li>
        <button type="submit" name="ubah">Ubah Data</button>
        <button type="submit">
            <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
        </button>
    </form>
</body>
</html>