<?php
      include "library/database.php";
      $db = new Database();
        session_start();

        if(isset($_GET['action']) && $_GET['action'] == "logout"){
          session_destroy();
          header("Location:login.php");
        }


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
    <div class="container">
    <div class="interestInfo">
        <h3 style="text-align: center;padding-top: 20px;">User Profile</h3>
        <hr>
        <h2>Welcome to your profile</h2>
        <?php
         $userName = $_SESSION['userName'];

         $query = "SELECT * FROM user WHERE username = '$userName'";
         $qResult = $db->select($query);
         if($qResult){
           $result = $qResult->fetch_assoc();
           $name = $result['name'];
           $userName = $result['username'];
           $contact = $result['contact'];
           $email = $result['email'];
           $college = $result['college'];
           $gender = $result['gender'];
           $skill = $result['skill'];

           ?>
           <p> Name : <?php echo  $name; ?> </p>
           <p> User Name : <?php echo  $userName; ?> </p>
           <p> Contact : <?php echo  $contact; ?> </p>
           <p> Email : <?php echo  $email; ?> </p>
           <p> College : <?php echo  $college; ?> </p>
           <p> Gender : <?php echo  $gender; ?> </p>
           <p> Skill : <?php echo  $skill; ?> </p>
           <?php
         }
         


?>

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