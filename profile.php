<?php
      include "library/database.php";
      $db = new Database();
       

        if(isset($_GET['action']) && $_GET['action'] == "logout"){
          session_destroy();
          header("Location:login.php");
        }


?>
<?php
include "include/header.php";


?>

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
<?php

include "include/footer.php";
?>