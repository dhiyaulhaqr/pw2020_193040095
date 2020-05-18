<?php
    function tumpukanBola($tumpukan){ 

        for ($i = 0; $i <= $tumpukan; $i) {
        for ($j = 1; $j <= $i;$j++){
            echo "<div class='bola'>$i</div>";
        }
            echo "<div class= 'clear'></div>";
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3c</title>
    <style>
    .bola {
        width :30px;
        height: 30px;
        line-height: 30px;
        background-color: salmon;
        text-align: center;
        border: 1px solid black;
        border-radius: 50%;
        margin: 5px;
        float:left;
    }
    .clear{
        clear: both;
    }
        
        </style>
</head>
<body>
    <?php
        tumpukanBola(5)
    ?>
</body>
</html>