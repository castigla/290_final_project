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
$name = "";
$location = "";


if (isset($_POST['name'])) {
    echo $_POST['name'];
    $name = $_POST['name'];
}else{
    // Fallback behaviour goes here
    echo "Provide a name please";
}


if (isset($_POST['location'])) {
    echo $_POST['location'];
    $location = $_POST['location'];
}else{
    // Fallback behaviour goes here
    echo "Provide a location please";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connection succeeded? ";
//prepare and bind
$stmt = $conn->prepare("INSERT INTO job (name, location) VALUES (?, ?)");
#$stmt->bind_param("sss", $firstname, $lastname, $email);


echo "Bind succeeded? ";


$stmt->bind_param("ss", $name, $location);

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