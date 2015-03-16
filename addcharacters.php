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
$fname = "";
$lname = "";

if (isset($_POST['fname'])) {
    echo $_POST['fname'];
    $fname = $_POST['fname'];
}else{
    // Fallback behaviour goes here
    echo "Provide a first name please";
}

if (isset($_POST['lname'])) {
    echo $_POST['lname'];
    $lname = $_POST['lname'];
}else{
    // Fallback behaviour goes here
    echo "Provide a last name please \n";
}

if (isset($_POST['hometown'])) {
    echo $_POST['hometown'];
    $hometown = $_POST['hometown'];
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
$stmt = $conn->prepare("INSERT INTO characters (fname, lname, hometown) VALUES (?, ?, ?)");
#$stmt->bind_param("sss", $firstname, $lastname, $email);


echo "Bind succeeded? ";


$stmt->bind_param("ssi", $fname, $lname, $hometown);

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