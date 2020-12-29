<?php
        if(isset($_GET['action']) && $_GET['action'] == "logout"){
            setcookie("NSU", "YES", time()- 86400, "/");
            header("Location:login.php");
        }


?>
<?php
include "include/header.php";


?>
    <div class="container">
        
        <hr>
        <input id="searchBox" type="text" style="width:30%" value="" oninput="usersearchTxt(document.getElementById('searchBox').value);">


       

    <div class="interestInfo">

    <div id="searchTable">
    <h3 style="text-align:center;">User Information</h3>
<table>

<?php
include 'AutoSearch.php';
    echo fetch('');
?>
</table>
</div>
    </div>

</div>
<script>
function usersearchTxt(str) {
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function () {
if(this.readyState == 4 && this.status == 200){
document.getElementById('searchTable').innerHTML =
this.responseText;
}
}
xmlhttp.open("GET","AutoSearch.php?search="+str,true);
xmlhttp.send();
}
</script>
<?php
include "include/footer.php";


?>