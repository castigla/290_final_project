<?php
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
$servername = "oniddb.cws.oregonstate.edu";
$username = "castigla-db";
$dbname = "castigla-db";
$password = "DBR4F3gMYcmQLepi";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "sql statement here";
$sql = "SELECT characters.id, fname, lname, city FROM characters join location on characters.hometown = location.id";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Hometown</th>
<th>Favorite</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
$id = $row['id'];
//echo "<td>" . $id . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['city'] . "</td>";

echo "<td><form action= 'check_fav_character.php'  method= 'post'><input type='hidden' name='cid' value=$id /> 
            <input type= 'submit' value= 'Favorite'/></form></td>\n";
echo "</tr>"; 
}
echo "</table>";

$conn->close();
?>