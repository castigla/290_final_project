<?php
header('Location: http://web.engr.oregonstate.edu/~dunforda/CS340/GGhome.php');
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
if (isset($_POST['id'])) {
    echo $_POST['id'];
    $id = $_POST['id'];
}else{
    // Fallback behaviour goes here
    echo "Error";
} 
$sql = "delete from school where id = '$id'";
$result = $conn->query($sql);

?>