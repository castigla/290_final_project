<body>
    <p>Characters by Hometown</p>
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
$city = "";

if (isset($_POST['city'])) {
    echo $_POST['city'];
    $city = $_POST['city'];
}else{
    // Fallback behaviour goes here
   // echo "Provide a city please";
}

//$sql = "SELECT fname, lname FROM characters join location on characters.hometown = location.id where city = ? ";
$stmt = $conn->prepare("SELECT fname, lname FROM characters join location on characters.hometown = location.id where city = ?");

$stmt->bind_param("s", $city);

if($stmt->execute() === TRUE) {
    //echo "New records created successfully";
}
else {
    echo "Error: " . $conn->error;
}

$result = $stmt ->get_result();
//$result = $conn->query($stmt);

echo "<table border='1'>
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