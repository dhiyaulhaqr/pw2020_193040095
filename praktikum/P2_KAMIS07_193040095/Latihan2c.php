<!DOCTYPE html>
<html>
<head>
    <title>Latihan2c</title>
    <style>
    .lingkaran {
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
    .kotak{
        float: left;
        

    }

    .clear{
        clear : both;
    }
    
</style>
</head>
<body>

<?php for ($i=1; $i <=3 ; $i++) :?>
    <div class = "kotak">
    <?php for ($j=1; $j <=$i ; $j++) :?>
        <div class="lingkaran"><?php echo $i; ?></div>
    <?php endfor; ?>
</div>
<div class="clear"></div>
<?php endfor; ?>
    
    
    
</body>
</html>