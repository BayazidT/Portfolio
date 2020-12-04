<?php
   include "library/database.php";
   $db = new Database();
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

    if($password == $repassword){
      $query ="INSERT INTO user(name, username, contact,email,college,gender,skill,password)Values ('$name', '$username', '$contact','$email','$college','$gender','$skill','$password')";
      $qResult = $db->insert($query);
      if($qResult){
         header("Location:login.php?msg='Registration Successul'");
      }


    }else{
       $msg = "Password and re password doesnot match"; 
       header("Location:register.php?msg=$msg");
    }

  
   






 }