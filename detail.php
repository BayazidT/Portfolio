<?php
include "include/header.php";


?>
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
<?php
include "include/footer.php";


?>