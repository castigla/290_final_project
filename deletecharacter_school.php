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
if (isset($_POST['cid'])) {
    echo $_POST['cid'];
    $cid = $_POST['cid'];
}else{
    // Fallback behaviour goes here
    echo "Provide a name please";
} 

$sql = "delete from character_school where cid = '$cid'";
$result = $conn->query($sql);

?>