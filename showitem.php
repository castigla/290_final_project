<?php
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

$sql = "SELECT characters.id, fname, lname, city FROM characters join location on characters.hometown = location.id";
$result = $conn->query($sql);

echo "<table border='1'>
<tr>
<th>Title</th>
<th>Description</th>
<th>Due Date</th>
<th>Hometown</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
$id = $row['id'];
echo "<td>" . $id . "</td>";
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['lname'] . "</td>";
echo "<td>" . $row['city'] . "</td>";

echo "<td><form action= 'deletecharacter.php'  method= 'post'><input type='hidden' name='id' value=$id /> 
            <input type= 'submit' value= 'Delete'/></form></td>\n";
echo "</tr>"; 
}
echo "</table>";

$conn->close();
?>