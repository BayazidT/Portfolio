<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>
Portfolio
</title>
<!-- Google Font: Source Sans Pro -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- overlayScrollbars -->

<link href="style.css" rel="stylesheet">
<!--JS script starts-->
<script src="JS/main.js"></script>
</head>
<body>
   
    <div class="header">
      <h2 class="headerTitle">Bayazid Talukder</h2>
    <!--Navbar for desktop or wide window starts-->
        <nav class="navbar">
            <ul>
            <li><a href="index.php">Home</a> </li>
                <li> <a href="about.php">About Me</a> </li>
                <li><a href="contact.php">Contact</a> </li>
                <?php
                
if(isset($_SESSION['login'])){
    ?>
     <li><a href="?action=logout">Logout</a></li>
    <?php
}else{

    ?>
 <li><a href="login.php">Login</a></li>
    <?php
}

?>
            </ul>
        </nav>
        <!--Navbar for desktop or wide window ends-->
        <!--Navbar for mobile or small window starts-->
       
        <nav class="navbarm">
          <button type="button" class="menuBar" onclick="navBar(this)" ><i class="fas fa-bars fa-2x"></i></button>
            <ul id="mobileNav" style="display: block;transition: 1s;">
            <li><a href="index.php">Home</a> </li>
                <li> <a href="about.php">About Me</a> </li>
                <li><a href="contact.php">Contact</a> </li>
<?php
if($_SESSION['login']){
    ?>
     <li><a href="?action=logout">Logout</a></li>
    <?php
}else{

    ?>
 <li><a href="login.php">Login</a></li>
    <?php
}

?>

               
            </ul>
          </nav>

        <!--Navbar for mobile or small window starts-->
        
    </div>
