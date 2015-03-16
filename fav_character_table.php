<?php
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
$servername = "oniddb.cws.oregonstate.edu";
$dbusername = "castigla-db";
$dbname = "castigla-db";
$password = "DBR4F3gMYcmQLepi";
// Create connection
$conn = new mysqli($servername, $dbusername, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$username = $_SESSION['username'];
$sql = "SELECT id, fname, lname, dateadded FROM user_character join characters on user_character.cid = characters.id WHERE uid = '$username' ";
$result = $conn->query($sql);

echo "
<br>
<br>
<p>Favorites</p>
<table border='1'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Date Added</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
$id = $row['id'];
//echo "<td>" . $id . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['dateadded'] . "</td>";


//echo "<td><form action= 'delete_fav_character.php'  method= 'post'><input type='hidden' name='id' value=$id /> 
//            <input type= 'submit' value= 'Delete'/></form></td>\n";
echo "</tr>"; 
}
echo "</table>";

$conn->close();
?>