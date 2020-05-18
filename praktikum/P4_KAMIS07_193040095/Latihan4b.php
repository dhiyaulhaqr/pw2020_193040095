<?php
    $bolaterkenal = ["Mohammad Salah", "Cristiano Ronaldo","Lionel Messi","Zlatan Ibrahimovic", "Neymar Jr"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h4>Daftar Pemain bola terkenal</h4>
   <ol>
    <?php foreach ($bolaterkenal as $nama):?>
        <ul><?= $nama ?></ul>
    <?php endforeach; ?>
   </ol>
    <br>
    <?php
        $bolaterkenal[]="Luca Modric";
        $bolaterkenal[]="Sadio Mane";
        sort($bolaterkenal)
    ?>

   <h4>Daftar Pemain bola terbaru</h4>
   <ol>
        <?php foreach ($bolaterkenal as $nama): ?>
            <ul><?php echo $nama; ?></ul>
        <?php endforeach; ?>
    </ol>
   </body>
</html>