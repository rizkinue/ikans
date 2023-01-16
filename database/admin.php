<?php
session_start();
include_once('koneksi.php');

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $admin = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND password='$password'");
    $user  = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password='$password'");
    $row1  = mysqli_fetch_array($admin);
    $row2  = mysqli_fetch_array($user);

    if (mysqli_num_rows($admin) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:../admin/index.php");
    } else if (mysqli_num_rows($user) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";
        header("location:../user/index.php");
    } else {
       // Error Message
        echo "<script>alert('Username atau Password Salah!');window.location='../index.php'</script>";
    }
}
?>