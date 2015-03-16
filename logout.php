<?php  
session_start();
session_destroy();
$_SESSION = array();
//header('Location: http://web.engr.oregonstate.edu/~dunforda/cs290/final_project/login.php');
?>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Gilmore Girls</title>
</head>

<body>
	<br>
	<br>
	<br>
<h3>You have successfully logged out. To return to the login page, click <a href="login.php">here</a>.</h3>
<h3>Click <a href="GGwelcome.php">here</a> to return to the Welcome page.</h3>
<h3>Thanks for visiting!</h3>

<img src="gglogout.jpg" alt="GGlogout">

</body>