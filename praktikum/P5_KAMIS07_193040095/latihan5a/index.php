<?php
    $conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
    mysqli_select_db($conn,"tubes_193040095") or die ("Database salah!");
    $result = mysqli_query($conn, "SELECT *FROM pakaian");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan5a</title>
     
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
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>Nama</th>
          <th>Ukuran</th>
          <th>Warna</th>
          <th>Stok</th>
          <th>Harga</th>
        </tr>
        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
         <tr>
             <td><?=$i; ?></td>
             <td><img src="assets/img/<?=$row["Foto"]; ?>"></td>
             <td><?=$row["Nama"]; ?></td>
             <td><?=$row["Ukuran"]; ?></td>
             <td><?=$row["Warna"]; ?></td>
             <td><?=$row["Stok"]; ?></td>
             <td><?=$row["Harga"]; ?></td>
         </tr>
         <?php $i++;?>
        <?php endwhile ?>
    </table>
</body>
</html>