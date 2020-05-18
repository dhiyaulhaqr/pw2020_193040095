<?php
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);
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
    <title>Document</title>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css" media="screen,projection" />

    <!-- my css -->
    <link rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body bgcolor="lavender">
    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username atau Password salah</p>
    <?php endif ?>
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
        <p>
            <label>
                <input type="checkbox" name="remember" />
                <span>Remember Me</span>
            </label>
        </p>
        <button class="btn waves-effect waves-light" type="submit" name="submit">Log In
            <i class="material-icons right">arrow_forward</i>
        </button>
    </form>
    <p>
        Belum punya akun? Registrasi <a href="registrasi.php">disini</a>
    </p>
</body>

</html>