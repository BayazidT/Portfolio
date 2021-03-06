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
    <div class="otherInfoForm">
        <h3 style="text-align: center;padding-top: 20px;">Register Your Account</h3>
        <?php
        if(isset($_GET['msg'])){
          $msg = $_GET['msg'];
          echo "<p style='color:red;text-align:center;'>".$msg."</p>";
        }

        ?>
        <hr>
        <div class="registerForm">
          <!--Register form starts-->
          <form name="RegisterForms" action="postRegister.php" method="POST" onsubmit="return formValidation();">
            <label for="name">Name</label><label style="color:red;margin-left:10px;" id="nameError"></label>
            <input type="text" id="name" name="name" placeholder="Name..">
            <!--/name input-->
            <label for="username">Username</label><label style="color:red;margin-left:10px;" id="usernameError"></label>
            <input type="text" id="username" name="username" placeholder="Username..">
            <!--/Username input-->
            <label>Contact no :       </label> <label style="color:red;margin-left:10px;" id="contactError"></label>
            <input type="text" name="contact" placeholder="Contact no.."><br> 
            <!--/Contact no-->
            <label>Email :       </label>
            <input type="email" name="email" placeholder="Email.."><br> 
             <!--/Email address-->
            <label>College :       </label><select name="college">
              <option>Select College</option>
              <option>Tongi College</option>
              <option>Milesote College</option>
              <option>Mega City College</option>
            </select>
             <!--/College info-->
            <label>Gender :       </label> <input type="radio" id="male" name="gender" value="male">
            Male</input>
            <input type="radio" id="female" name="gender" value="female">
            Female</input>
            <input type="radio" id="other" name="gender" value="other">
            Other</input><label style="color:red;margin-left:10px;" id="genderError"></label>
             <!--/Gender info-->
             <br>
            <label>Skills : </label><input type="checkbox" id="Java" name="skill" value="Java">
            Java
            <input type="checkbox" id="Android" name="skill" value="Android">
            Android
            <input type="checkbox" id="Ruby" name="skill" value="Ruby">
           Ruby
           <input type="checkbox" id=".Net" name=".skill" value=".Net">
           .Net <br>
            <!--/Skill info-->
            <label for="password">Password</label><label style="color:red;margin-left:10px;" id="passwordError"></label>
            <input type="password" id="password" name="password" placeholder="Password..">
             <!--/Password-->
            <label for="password">Re-type Password</label><label style="color:red;margin-left:10px;" id="passwordError"></label>
            <input type="password" id="repassword" name="repassword" placeholder="Password..">
            <!--/Retype password-->
            <!--Submit button-->
            <input type="submit" name="register" value="Register">
          </form>
           <!--Register form ends-->
          <hr>
          <P>Already have an account ? <a href="login.php"> Login here</a></P>
        </div>
        <!--/registerForm-->
       
    </div>
    <!--/otherInfoForm-->

</div>
<!--/Container-->
<!--Footer section starts-->
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
<script type="text/javascript">
    function formValidation() {
      
      var name = document.forms["RegisterForms"]["name"].value;
      var username = document.forms["RegisterForms"]["username"].value;
      var password = document.forms["RegisterForms"]["password"].value;
      var gender = document.forms["RegisterForms"]["gender"].value;
      var contact = document.forms["RegisterForms"]["contact"].value;
      var flag = true;
      var passwordLength = /^[a-zA-Z0-9!@$%]{8,32}$/;
      var whiteSpace = /\s/;
      var contactChk = /^[0-9]/;
      if(name == ''){
        document.getElementById('nameError').innerHTML="Name cannot be empty";
        flag = false;
      }
      if(username == ''){
        document.getElementById('usernameError').innerHTML="Username cannot be empty";
        flag = false;
      }
      if(gender == ''){
        document.getElementById('genderError').innerHTML="Gender need to be selected";
        flag = false;
      }
      if(!contactChk.test(contact)) {
          document.getElementById('contactError').innerHTML="Contact bo contains numbers only";
          flag = false;
        }
      if(whiteSpace.test(username)) {
          document.getElementById('usernameError').innerHTML="Username cannot contains white space";
          flag = false;
        }
        if(!passwordLength.test(password)) {
          document.getElementById('passwordError').innerHTML="Password length must be between 8-32";
          flag = false;
        }
      return flag;
    }
  </script>