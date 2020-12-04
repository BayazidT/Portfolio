<?php
   include "library/database.php";

   $db = new Database();
   session_start();

 if(isset($_POST['login'])){
   $userName = $_POST['userName'];
   $userPassword = $_POST['userPassword'];

   $query = "SELECT username, password FROM user WHERE username = '$userName' AND password = '$userPassword' ";
   $qResult = $db->select($query);
   if($qResult){

    $_SESSION['login'] = true;
    $_SESSION['userName'] = $userName;
     header("Location:profile.php");
   }
   


 }