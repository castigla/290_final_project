<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/plain');
//header('Location: http://web.engr.oregonstate.edu/~dunforda/cs290/final_project/GGwelcome.php');
$servername = "oniddb.cws.oregonstate.edu";
$dbusername = "castigla-db";
$dbname = "castigla-db";
$dbpassword = "DBR4F3gMYcmQLepi";

//echo "Test echo ";
$username=$_REQUEST["q"];
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
$stmt = $conn->prepare("SELECT * from user where username=?");
#$stmt->bind_param("sss", $firstname, $lastname, $email);


//echo "Bind succeeded? ";


$stmt->bind_param("s", $username);

if($stmt->execute() === TRUE) {
   // echo "New records created successfully";
}
else {
    //echo "Error: " . $conn->error;
}

//$count=$stmt->fetchColumn();
$result = $stmt ->get_result();

if ($result-> num_rows > 0) {
    echo "invalid: username already exists.";

}
else {
	echo "available";
}

//echo "The end of the program?";
$stmt->close();
$conn->close();
?>