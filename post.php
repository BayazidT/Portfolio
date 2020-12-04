<?php
session_start();
if(isset($_POST['login'])){
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];

    if ($userName == "BT" && $userPassword == "1234") {
        setcookie("CookiSet", "YES", time() + (86400*30), "/");
        header("Location:dashboard.php");
      } else {
        $_SESSION["error"] = "Invalid Username & Passoword";
        $_SESSION['username'] = $userName;
        $_SESSION['userpass'] = $userPassword;
        header("Location:login.php");
      }
    
}
if(isset($_POST['register'])){
    $Name = $_POST['name'];
    $userName = $_POST['userName'];
    $userPassword = $_POST['userPassword'];
    $userPassword = $_POST['userPassword'];

}
