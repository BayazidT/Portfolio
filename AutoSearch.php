<?php
 include "library/database.php";
 

function fetch($value='')
{
    $db = new Database();
$sql = "SELECT * FROM user WHERE name LIKE '%".$value."%' OR
username LIKE '%".$value."%' OR email LIKE '%".$value."%' OR contact LIKE '%".$value."%' OR college LIKE '%".$value."%'";
$result = $db->select($sql);
if($result) {

echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>User Name</th>";
echo "<th>Email</th>";
echo "<th>Contact</th>";
echo "<th>College</th>";
echo "<th>Gender</th>";
echo "</tr>";
while ($row = mysqlI_fetch_assoc($result)) {
echo "<tr>";
echo "<td>".$row['u_ID']."</td>";
echo "<td>".$row['name']."<td>";
echo "<td>".$row['username']."<td>";
echo "<td>".$row['email']."<td>";
echo "<td>".$row['contact']."</td>";
echo "<td>".$row['college']."<td>";
echo "<td>".$row['gender']."<td>";
echo "</tr>";
}
echo "</table>";
} else {
echo "No match ";
}

}
if (isset($_GET['search'])) {
fetch($_GET['search']);
}
?>