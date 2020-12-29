<?php
include "include/database.php";

$db = new Database();

function fetch($value=’’)
{

$sql = "SELECT * FROM employees WHERE First_Name LIKE '%".$value."%' OR
Last_Name LIKE '%".$value."%' OR Email LIKE '%".$value."%'";
$result = $db->select($sql);
if($result) {

echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Email</th>";
echo "</tr>";
while ($row = mysqlI_fetch_assoc($result)) {
echo "<tr>";
echo "<td>".$row['Employee_Id']."</td>";
echo "<td>".$row['First_Name']." ".$row['Last_Name']."<td>";
echo "<td>".$row['Email']."<td>";
echo "</tr>";
}
echo "</table>";
} else {
echo "Error :".$sql."<br>".mysqli_error($connection);
}
conectionEnd($connection);
}
if (isset($_GET['search'])) {
fetch($_GET['search']);
}
?>