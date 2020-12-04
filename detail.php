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
                <li><a href="login.php">Login</a></li>
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
                <li><a href="login.php">Login</a></li>
            </ul>
          </nav>

        <!--Navbar for mobile or small window starts-->
        
    </div>
    <div class="container">
    <div class="interestInfo">
        <h3 style="text-align: center;padding-top: 20px;">Register Data</h3>
        <hr>
        <?php
        session_start();

        if(isset($_SESSION['register'])){
    
            $name= $_SESSION['name'];
            $username= $_SESSION['username'] ;
            $contact= $_SESSION['contact'];
            $email= $_SESSION['email'];
            $college= $_SESSION['college'];
            $gender = $_SESSION['gender'];
            $skill= $_SESSION['skill'];
            $password = $_SESSION['password'];
            $repassword = $_SESSION['repassword'];
        
            ?>
            <p> Name : <?php echo $name; ?></p>
            <p> Username : <?php echo $username; ?></p>
            <p> Email : <?php echo $email; ?></p>
            <p> Contact No. : <?php echo $contact; ?></p>
            
            <?php
        }


?>
      
        <hr>
        
        <h4>Educational Qualification</h4>
        <hr>

        <p>Email: bayazid.talukder@northsouth.edu</p>
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
      
      <h3 style="text-align: center; background-color: #444;color: #fff;height: 30px;margin-bottom: -10px;padding: 10px;">&copy 2020 Bayazid Talukder | All right received!</h3>
       <a href="#"> <button class="topBtn"><i class="fas fa-arrow-up fa-2x"></i></button></a>

    </div>
</body>
</html>