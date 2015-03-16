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

//statement goes here
$sql = "SELECT cid, sid, fname, name FROM character_school join characters on character_school.cid = characters.id join school on character_school.sid = school.id";
$result = $conn->query($sql);

//setting up table
echo "<table class = 'gridtable'>
<tr>
<th>Character</th>
<th>School</th>
<th>Delete</th>
</tr>";

//loop to populate table
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
$cid = $row['cid'];
echo "<td>" . $row['fname']. "</td>";
echo "<td>" . $row['name'] . "</td>";

//delete button
echo "<td><form action= 'deletecharacter_school.php'  method= 'post'><input type='hidden' name='cid' value=$cid /> 
            <input type= 'submit' value= 'Delete'/></form></td>\n";
echo "</tr>"; 
}
echo "</table>";

$conn->close();
?>