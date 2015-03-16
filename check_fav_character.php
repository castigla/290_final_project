<?php
session_start();
//error_reporting(E_ALL);
//ini_set('display_errors', 1);
header('Content-Type: text/plain');
header('Location: http://web.engr.oregonstate.edu/~dunforda/cs290/final_project/favorite_character.php');
$servername = "oniddb.cws.oregonstate.edu";
$username = "castigla-db";
$dbname = "castigla-db";
$password = "DBR4F3gMYcmQLepi";

//echo "Test echo ";
$uid = $_SESSION['username'];
$cid = "";


if (isset($_POST['uid'])) {
    echo $_POST['uid'];
    //$uid = $_POST['uid'];
}else{
    // Fallback behaviour goes here
    echo "Provide a first name please";
}

if (isset($_POST['cid'])) {
    echo $_POST['cid'];
    $cid = $_POST['cid'];
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
$date = date('Y-m-d H:i:s');
//echo $date;
//echo "date should be here";
$stmt = $conn->prepare("INSERT INTO user_character (uid, cid, dateadded) VALUES (?, ?, ?)");
#$stmt->bind_param("sss", $firstname, $lastname, $email);


echo "Bind succeeded? ";


$stmt->bind_param("sis", $uid, $cid, $date);

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