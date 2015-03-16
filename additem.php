<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/plain');
//header('Location: http://web.engr.oregonstate.edu/~dunforda/cs290/todohome.php');
$servername = "oniddb.cws.oregonstate.edu";
$dbuser = "castigla-db";
$dbname = "castigla-db";
$password = "DBR4F3gMYcmQLepi";

//echo "Test echo ";
$username = "";
$title = "";
$description = "";
$flag = 0;

if (isset($_GET['username'])) {
    echo $_GET['username'];
    $username = $_GET['username'];
}else{
    // Fallback behaviour goes here
    echo "Provide a first name please";
}

if (isset($_GET['title'])) {
    echo $_GET['title'];
    $title = $_GET['title'];
}else{
    // Fallback behaviour goes here
    echo "Provide a last name please \n";
}

if (isset($_GET['description'])) {
    echo $_GET['description'];
    $description = $_GET['description'];
}else{
    // Fallback behaviour goes here
    echo "Provide a last name please \n";
}

if (isset($_GET['duedate'])) {
    echo $_GET['duedate'];
    $duedate = $_GET['duedate'];
}else{
    // Fallback behaviour goes here
    echo "Provide a last name please \n";
}
// Create connection
$conn = new mysqli($servername, $dbuser, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "username should be here";
echo $username;
echo "Connection succeeded? ";
//prepare and bind
$stmt = $conn->prepare("INSERT INTO todo (username, title, description, duedate, flag) VALUES (?, ?, ?, ?, ?)");
#$stmt->bind_param("sss", $firstname, $lastname, $email);


echo "Bind succeeded? ";


$stmt->bind_param("ssssi", $username, $title, $description, $duedate, $flag);

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