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
//select statement goes here
$sql = "SELECT cid, jid, fname, name FROM character_job join characters on character_job.cid = characters.id join job on character_job.jid = job.id";
$result = $conn->query($sql);

//table setup
echo "<table border='1'>
<tr>
<th>Character</th>
<th>Job</th>
<th>Delete</th>
</tr>";

//loop to populate table
while($row = mysqli_fetch_array($result))
{
echo "<tr>";
$cid = $row['cid'];
$jid = $row['jid'];
echo "<td>" . $row['fname'] . "</td>";
echo "<td>" . $row['name'] . "</td>";

//delete button 
echo "<td><form action= 'deletecharacter_job.php'  method= 'post'><input type='hidden' name='cid' value='$cid'/> 
            <input type= 'submit' value= 'Delete'/></form></td>\n";
echo "</tr>"; 
}
echo "</table>";

$conn->close();
?>