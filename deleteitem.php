<?php
header('Location: http://web.engr.oregonstate.edu/~dunforda/cs290/todohome.php');
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
if (isset($_POST['title'])) {
    echo $_POST['title'];
    $title = $_POST['title'];
}else{
    // Fallback behaviour goes here
    echo "Provide a name please";
} 

$sql = "delete from todo where title = '$title'";
$result = $conn->query($sql);

?>