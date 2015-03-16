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

$sql = "SELECT job.id, name, city FROM job join location on job.location = location.id";
$result = $conn->query($sql);
//table setup
echo "<table class = 'gridtable'>
<tr>
<th>ID</th>
<th>Name</th>
<th>Location</th>
<th>Delete</th>
</tr>";

//loop through to make table
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
$id = $row['id'];
echo "<td>" . $id . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['city'] . "</td>";

//delete button
echo "<td><form action= 'deletejob.php'  method= 'post'><input type='hidden' name='id' value=$id /> 
            <input type= 'submit' value= 'Delete'/></form></td>\n";
echo "</tr>"; 
}
echo "</table>";

$conn->close();
?>