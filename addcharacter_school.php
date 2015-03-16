<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/plain');
header('Location: http://web.engr.oregonstate.edu/~dunforda/CS340/GGhome.php');
$servername = "oniddb.cws.oregonstate.edu";
$username = "castigla-db";
$dbname = "castigla-db";
$password = "DBR4F3gMYcmQLepi";

//echo "Test echo ";
$cid = "";
$sid = "";

//get cid info
if (isset($_POST['cid'])) {
    echo $_POST['cid'];
    $cid = $_POST['cid'];
}else{
    // Fallback behaviour goes here
    echo "Provide a first name please";
}

//get sid info
if (isset($_POST['sid'])) {
    echo $_POST['sid'];
    $sid = $_POST['sid'];
}else{
    // Fallback behaviour goes here
    echo "Provide a last name please \n";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection succeeded? ";
//prepare and bind
$stmt = $conn->prepare("INSERT INTO character_school (cid, sid) VALUES (?, ?)");
#$stmt->bind_param("sss", $firstname, $lastname, $email);


echo "Bind succeeded? ";

//bind int in cid sid
$stmt->bind_param("ii", $cid, $sid);

if($stmt->execute() === TRUE) {
    echo "New records created successfully";
}
else {
    echo "Error: " . $conn->error;
}

echo "The end of the program?";
$stmt->close();
$conn->close();
?>