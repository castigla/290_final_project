<body>
    <p>Characters by Job</p>
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//header('Location: http://web.engr.oregonstate.edu/~dunforda/CS340/selecthome.php');
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
$name = "";

if (isset($_POST['name'])) {
    echo $_POST['name'];
    $name = $_POST['name'];
}else{
    // Fallback behaviour goes here
   // echo "Provide a city please";
}

//$sql = "SELECT fname, lname FROM characters join location on characters.hometown = location.id where city = ? ";
$stmt = $conn->prepare("SELECT fname, lname FROM characters join character_job on characters.id = character_job.cid join job on character_job.jid = job.id where name = ?");

$stmt->bind_param("s", $name);

if($stmt->execute() === TRUE) {
    //echo "New records created successfully";
}
else {
    echo "Error: " . $conn->error;
}

$result = $stmt ->get_result();
//$result = $conn->query($stmt);

echo "<table class = 'gridtable'>
<tr>
<th>First Name</th>
<th>Last Name</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
$id = $row['fname'];
echo "<td>" . $id . "</td>";
echo "<td>" . $row['lname'] . "</td>";

echo "</tr>"; 
}
echo "</table>";

$stmt->close();
$conn->close();
?>
<br>
<br>
<br>
<a href="selecthome.php">Click here to return to search</a>
<link rel="stylesheet" type="text/css" href="selectstyling.css">
</body>