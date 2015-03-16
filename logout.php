<?php  
session_start();
session_destroy();
$_SESSION = array();
header('Location: http://web.engr.oregonstate.edu/~dunforda/cs290/final_project/login.php');
?>