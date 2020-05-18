<?php
    session_start();
    require 'functions.php';

    if(isset($_SESSION['username'])) {
        header("Location: admin.php");
        exit;
    }
    if(isset($_COOKIE['usernamae']) && isset($_COOKIE['hash'])) {
        $username = $_COOKIE['username'];
        $hash = $_COOKIE['hash'];

        $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
        $row = mysqli_fetch_assoc($result);

        if($hash === hash('sha256', $row['id'], false)) {
            $_SESSION['username'] = $_POST['username'];
            header("Location: admin.php");
            exit;
        }
    }

    if(isset($_POST['submit'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
        if(mysqli_num_rows($cek_user) > 0) {
            $row = mysqli_fetch_assoc($cek_user);
            if(password_verify($password,$row['password'])) {
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['hash'] = hash('sha256', $row['id'], false);


                
                if(isset($_POST['remember'])) {
                    setcookie('username', $row['username'], time() + 60 * 60 * 24);
                    $hash = hash('sha256', $row['id']);
                    setcookie('hash', $hash, time() + 60 * 60 * 24);
                }
            }
            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
        $error = true;
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

      <!-- my css -->
      <link rel="stylesheet"  href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body style="background-image: url(../assets/img/login.jpg); background-size:900px;" >
              
    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic; text-align:center">Username atau Password salah</p>
    <?php endif ?>

    <!-- Log In -->
    <section id="Log In" class="Log In">
          <div class="container" style="margin-top: 100px;">
          <div class="row">
          <div class="col offset-m3  s6  ">
              
            <form action="" method="post">
              <div class="card-panel m3 s6">
                <h5 style="text-align: center">Log In</h5>
                <div class="input-field">
                  <input type="text" name="username" id="username"
                  required class="validate" autocomplete="off">
                  <label for="username" class="active">Username</label>
                </div>

                <div class="input-field">
                  <input type="password" name="password" id="password">
                  <label for="password" class="active">Password</label>
                </div>

                        <p>
                            <label> 
                                <input type="checkbox" name="remember" />
                                <span>Remember Me</span>
                            </label>
                        </p>

                    <button class="waves-effect indigo accent-1 btn-small" type="submit" name="submit">Log In
                            <i class="material-icons right">arrow_forward</i>
                    </button> 

                    <p>
                        Belum punya akun? Registrasi <a href="registrasi.php">disini</a>
                    </p>
                </div>
              </div>
            </form>
          </div>
           </div>
           </div>
         </div>
       </section>
</body>
</html>