<?php 
    require 'functions.php';
    if(isset($_POST['register'])) {
        if(registrasi($_POST) > 0) {
            echo "<script>
                alert('Registrasi berhasil');
                document.location.href = 'login.php';
            </script>";
        } else {
            echo "<script>
                alert('Registrasi gagal');
                document.location.href = 'login.php';
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

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!-- my css -->
      <link rel="stylesheet"  href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

</head>
<body bgcolor="#FFE4E1">
<form action="" method="post">
    <table>
        <tr>
            <td>
                <div class="row">
                    <div class="input-field col s4">
                        <input type="text" name="username">
                        <label for="username" class="active">Username</label>
                    </div>
                </div>
            </td>
        </tr>
        <tr>
            <td>
            <div class="row">
                    <div class="input-field col s4">
                        <input type="password" name="password">
                        <label for="password" class="active">Password</label>
                    </div>
                </div>
            </td>
        </tr>
    </table>
        <button class="btn waves-effect waves-light" type="submit" name="register">Registrasi
                <i class="material-icons right">arrow_forward</i>
        </button>  
    </form>
   
</body>
</html>