<html>
<head>
 <meta charset = "UTF-8">
<meta name = "viewport" content = width=device-width, init>
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Document</title>
<style>
    .kotak{
        width :30px;
        height: 30px;
        line-height: 30px;
        text-align: center;
        border: 1px solid black;
        border-radius: 50%;
        background: lightblue;
        margin: 5px;
    }
    
</style>
</head>
<body>
        <?php $huruf1 = "A"; ?>
        <div class="container">
        <div class="kotak"><?php echo $huruf1; ?></div>
        </div>
        <br>
        <?php $huruf1 = "B"; ?>
        <div class="container">
        <div class="kotak" style="float:left;"><?php echo $huruf1; ?></div>
        </div>
        <?php $huruf1 = "B"; ?>
        <div class="container">
        <div class="kotak" style="float:left;"><?php echo $huruf1; ?></div>
        </div>
        <br>
        <br>
        <br>
        <?php $huruf1 = "C"; ?>
        <div class="container">
        <div class="kotak" style="float:left;"><?php echo $huruf1; ?></div>
        </div>
        <?php $huruf1 = "C"; ?>
        <div class="container">
        <div class="kotak" style="float:left;"><?php echo $huruf1; ?></div>
        </div>
        <?php $huruf1 = "C"; ?>
        <div class="container">
        <div class="kotak" style="float:left;"><?php echo $huruf1; ?></div>
        </div>
        
</body>
</html>