<?php
        if(isset($_GET['action']) && $_GET['action'] == "logout"){
            setcookie("NSU", "YES", time()- 86400, "/");
            header("Location:login.php");
        }
        include "library/database.php";

        $db = new Database();

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <li><a href="?action=logout">Logout</a></li>
            </ul>
        </nav>
        <!--Navbar for desktop or wide window ends-->
        <!--Navbar for mobile or small window starts-->
       
        <nav class="navbarm">
            <button type="button" class="menuBar" onclick="navBar(this)" ><i class="fas fa-bars fa-2x"></i></button>
            <ul id="mobileNav" style="display: none;transition: 1s;">
            <li><a href="index.php">Home</a> </li>
                <li> <a href="about.php">About Me</a> </li>
                <li><a href="contact.php">Contact</a> </li>
                <li><a href="?action=logout">Logout</a></li>
            </ul>
          </nav>

        <!--Navbar for mobile or small window starts-->
    </div>
    <div class="container">
        
        <hr>
       <?php
       $query = "SELECT * FROM departments";
       $qResult = $db->select($query);
       if($qResult){
           while($result = $qResult->fetch_assoc()){
           echo $result['Department_Name'];
           echo " Manager Id: ".$result['Manager_id']."<br>";
               
           }
       }



?>

    <div class="interestInfo">

   <p> Hello Word! You are now logged in!!</p>
    </div>

</div>
    <div class="footer">
        <hr>
    <div class="socialIcon">
        <p>Connect with social media</p>
        <a href="https://www.facebook.com/b.t.nirob.3" target="blank" >
          <i class="fab fa-facebook-square fa-3x"></i>
        </a>
        <a href="#" >
            <i class="fab fa-linkedin fa-3x"></i>
        </a>
        <a href="#" >
          <i class="fab fa-twitter-square fa-3x"></i>
        </a>
        <a href="#" >
          <i class="fas fa-envelope-square fa-3x"></i>
        </a>
       
      </div>
      
      <h3 class="footerH">&copy 2020 Bayazid Talukder | All right received!</h3>
       <a href="#"> <button class="topBtn"><i class="fas fa-arrow-up fa-2x"></i></button></a>

    </div>
</body>
</html>