<?php
session_start();
header('Location: http://web.engr.oregonstate.edu/~dunforda/cs290/final_project/favorite_character.php');
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

$uid = $_SESSION['username'];

if (isset($_POST['uid'])) {
    echo $_POST['uid'];
    $uid = $_POST['uid'];
}else{
    // Fallback behaviour goes here
    echo "Provide a name please";
} 

if (isset($_POST['cid'])) {
    echo $_POST['cid'];
    $cid = $_POST['cid'];
}else{
    // Fallback behaviour goes here
    echo "Provide a name please";
} 

$sql = "delete from user_character where cid = '$cid' and uid = '$uid'";
$result = $conn->query($sql);

?>