<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .tulisan{
            font-size : 28px;
            font-style: italic;
            font-family: arial;
            color: #8c782d;
        }
        .bungkus{
            border: 1px solid black;
            box-shadow: 5px -5px 5px;
            border-radius: 5px;
            width: 500px;
            height: 100px;
        }
    
    
    </style>
</head>
<body>
        <div class="bungkus">
        <p class = 'tulisan'> Selamat datangn di praktikum pw 2020</p>
        </div>
        <br>

    <?php
        function gantiStyle($tulisan, $style1, $style2) {
            echo "<div class = '$style1'>
            <p class = '$style2'>$tulisan</p>
            </div>";
        }
    ?>

    <?php 
        echo gantiStyle("Selamat Datang di praktikum pw 2020", "bungkus", "tulisan");
    
    ?>
    
</body>
</html>