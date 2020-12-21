<?php
        if(isset($_GET['action']) && $_GET['action'] == "logout"){
            setcookie("NSU", "YES", time()- 86400, "/");
            header("Location:login.php");
        }
        include "library/database.php";

        $db = new Database();

?>
<?php
include "include/header.php";


?>
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
<?php
include "include/footer.php";


?>