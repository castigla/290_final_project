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
$city = "";
$state = "";

if (isset($_POST['city'])) {
    echo $_POST['city'];
    $city = $_POST['city'];
}else{
    // Fallback behaviour goes here
    echo "Provide a city please";
}

if (isset($_POST['state'])) {
    echo $_POST['state'];
    $state = $_POST['state'];
}else{
    // Fallback behaviour goes here
    echo "Provide a state please \n";
}
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection succeeded? ";
//prepare and bind
$stmt = $conn->prepare("INSERT INTO location (city, state) VALUES (?, ?)");
#$stmt->bind_param("sss", $firstname, $lastname, $email);


echo "Bind succeeded? ";


$stmt->bind_param("ss", $city, $state);

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