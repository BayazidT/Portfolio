<?php
 if(isset($_POST['register'])){

    $name=$_POST['name'];
    $username=$_POST['username'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $college=$_POST['college'];
    $gender=$_POST['gender'];
    $skill=$_POST['skill'];
    $password=$_POST['password'];
    $repassword=$_POST['repassword'];
    //Saving the variables to session
    session_start();
    $_SESSION['register']=true;
    $_SESSION['name']= $name;
    $_SESSION['username']= $username;
    $_SESSION['contact']= $contact;
    $_SESSION['email']= $email;
    $_SESSION['college']= $college;
    $_SESSION['gender']= $gender;
    $_SESSION['skill']= $skill;
    $_SESSION['password']= $password;
    $_SESSION['repassword']= $repassword;
    header("Location:detail.php");






 }