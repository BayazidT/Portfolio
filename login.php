<?php
if(isset($_COOKIE['CookiSet'])){
  header("Lcation:dashboard.php");
}
include "include/header.php";
?>

    <div class="container">
    <div class="interestInfo">
        <h3 style="text-align: center;padding-top: 20px;">Login Here</h3>
        <?php
        if(isset($_GET['msg'])){
          $msg = $_GET['msg'];
          echo "<p style='color:green;text-align:center;'>".$msg."</p>";
        }

        ?>
        <hr>
        <div class="loginForm">
        <?php
         if(isset($_GET['errMsg'])){
          $msg = $_GET['errMsg'];
          echo "<p style='color:red;text-align:center;'>".$msg."</p>";
        }
   
      
     
     ?>
          <form action="post.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="userName" value="<?php if(isset($_SESSION["error"])) { echo $_SESSION['username']; }?>" placeholder="Username..">
        
            <label for="password">Password</label>
            <input type="password" id="password" name="userPassword" placeholder="Password..">
            <?php
            if(isset($_SESSION["error"])) {
            echo "<p>".$_SESSION["error"]."</p>";}
          session_destroy();

          ?>
            <input type="submit" name="login" value="Login">
          </form>
          
          <hr>
          <P>Don't have an account? <a href="register.php"> Register here</a></P>
        </div>
    </div>

</div>
   <?php

   include "include/footer.php";
   ?>