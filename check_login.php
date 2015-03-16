<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/plain');
//header('Location: http://web.engr.oregonstate.edu/~dunforda/cs290/final_project/GGwelcome.php');
$servername = "oniddb.cws.oregonstate.edu";
$dbusername = "castigla-db";
$dbname = "castigla-db";
$dbpassword = "DBR4F3gMYcmQLepi";

//echo "Test echo ";
$username = "";
$password = "";



if (isset($_POST['username'])) {
    //echo $_POST['username'];
    $username = $_POST['username'];
}else{
    // Fallback behaviour goes here
    //echo "Provide a username please";
}

if (isset($_POST['password'])) {
    //echo $_POST['password'];
    $password = $_POST['password'];
}else{
    // Fallback behaviour goes here
    //echo "Provide a password please \n";
}
//echo "username here";
//echo "$username";
//echo "password here";
//echo "$password";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connection succeeded? ";
//prepare and bind
//$date = date('Y-m-d H:i:s');
//echo $date;
//echo "date should be here";
$stmt = $conn->prepare("SELECT * from user where username=? and password=?");
#$stmt->bind_param("sss", $firstname, $lastname, $email);


//echo "Bind succeeded? ";


$stmt->bind_param("ss", $username, $password);

if($stmt->execute() === TRUE) {
   // echo "New records created successfully";
}
else {
    //echo "Error: " . $conn->error;
}

//$count=$stmt->fetchColumn();
$result = $stmt ->get_result();

if ($result-> num_rows > 0) {
    $_SESSION['username']=$username;
	header('Location: http://web.engr.oregonstate.edu/~dunforda/cs290/final_project/favorite_character.php');

}
else {
	header('Location: http://web.engr.oregonstate.edu/~dunforda/cs290/final_project/registration.php');
}

echo "The end of the program?";
$stmt->close();
$conn->close();
?>