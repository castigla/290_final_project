
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="style.css">
<head>
<title>Register Here</title>
</head>
<body>

  <script>
function check_existing(str) {
    if (str.length == 0) { 
        document.getElementById("valid").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("valid").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "valid_username.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

  <h1> Register for Gilmore Girls </h1>
  <div class="reg-holder">
  <form action="adduser.php" method="post" autocomplete="off">
    <div class="reg-div">
      <br>
       <h4>Username: <input type="text" onkeyup="check_existing(this.value)" name="username" required></h4>
      <h4>Availability: <span id="valid"></span></h4>
    </div>
    <div class="reg-div">
      <h4>Password:
       <br>
        <input type="password" name="password" required> </h4>
    </div>
    <div class="reg-div">
      <h4>Choose a profile picture! <br> <input type="image" src="gilmore-girls.png" name="image" value="gilmore-girls.png" required> </h4>
      <input type="image" src="gilmore.jpg" name="image" value="gilmore.jpg" required> 
      <br>
     <!-- <input type="image" src="gilmore-girls.png"> -->
    <!--<input type="submit" value="Register">-->
  </form>
  </div>
  <br>
  <br>
  <p>To return to the login page, click <a href="login.php">here</a></p>
</body>
</html>