
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<script src="login.js"></script>
<head>
<title>Login to Gilmore Girls</title>
</head>

<body>
  <h1> Login Here Gilmore Girls </h1>
 
  <div class="reg-holder">
  <form action="check_login.php" id="my-form" method="post">
    <div class="reg-div">
      <h4>Username: <input type="text" name="username" required></h4>
    </div>
    <div class="reg-div">
      <h4>Password: <input type="password" name="password" required></h4>
    </div>
    <input type="submit" value="Login">
  </form>
  </div>
  <div class="reg-holder">
    <br>
    <br>
    <strong> Don't have an account? click <a href="registration.php">here</a> to register. </strong>
  </div>
  </body>
  </html>