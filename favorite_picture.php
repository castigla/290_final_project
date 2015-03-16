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
$sqlimage = "SELECT image from user where username = '$username'";
$imageresult = $conn->query($sqlimage);
$imagerow = mysqli_fetch_array($imageresult);
$imagename = $imagerow['image'];


if ($imagename == 'gilmore-girls.png') {
  echo "<img src='gilmore-girls.png' alt='gilmore-girls'>";
}
else {
  echo "<img src='gilmore.jpg' alt='gilmore'>";
}


$conn->close();
?>