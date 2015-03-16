<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="gghomestyling.css">
  <title>Gilmore Girls</title>
  </head>

  <body>
    <h1>Gilmore Girls</h1>

    <p>To enter a new character, please use the forms below.</p>
    <p>To delete a character, hit the 'delete' key in the table next to the character you would like to remove.</p>
    <br>
    <br>
      <br>
  <p>Add A Location</p>
   <form action = "addlocation.php" method = "POST"> 
      <p>City: <input type = "text" name = "city"> </p>
      <p>State: <input type = "text" name = "state"> </p>
      <br>
      <input type = "submit" value = "Submit">
      </form>
      <form action="showlocation.php" method="POST">
      <br>
      <br>
  </form>

<div align = 'center'>
  <?php
    include 'showlocation.php';
    ?>
    </div>

    <form action="deletelocation.php" method="POST">
 <div align="center">
  </div>

</form>
<br>
<br>
    <p>Add A Character</p>
    <form action = "addcharacters.php" method = "POST"> 
      <p>First Name: <input type = "text" name = "fname"> </p>
      <p>Last Name: <input type = "text" name = "lname"> </p>
      <p>Location ID: <input type="number" name = "hometown" min="1" max="500"> </p>


      <input type = "submit" value = "Submit">
      </form>

      <!--<form action = "showlocation.php" method = "POST"></form>-->
      <form action="showcharacters.php" method="POST">
        <br>
      <br>
     </form>

  <div align = 'center'>

   <?php
    include 'showcharacters.php';
    ?>

    </div>
    <form action="deletecharacter.php" method="POST">
 <div align="center">
  </div>

</form>
  <br>
  <br>
    <p>Add A School</p>
    <form action = "addschool.php" method = "POST"> 
      <p>Name: <input type = "text" name = "name"> </p>
      <p>Location ID: <input type="number" name = "location" min="1" max="500"> </p>

      <input type = "submit" value = "Submit">
      </form>
      <form action="showschool.php" method="POST">
      <br>
      <br>
  </form>

  <div align = 'center'>
   <?php
    include 'showschool.php';
    ?>
    </div>

    <form action="deleteschool.php" method="POST">
 <div align="center">
  </div>

</form>
<br>
  <br>
  <p>Add A Job</p>
    <form action = "addjob.php" method = "POST"> 
      <p>Name of Company: <input type = "text" name = "name"> </p>
      <p>Location ID: <input type="number" name = "location" min="1" max="500"> </p>

      <input type = "submit" value = "Submit">
      </form>
      <form action="showjob.php" method="POST">
      <br>
      <br>
  </form>

<div align = 'center'>
   <?php
    include 'showjob.php';
    ?>
    </div>

    <form action="deletejob.php" method="POST">
 <div align="center">
  </div>

</form>
<br>
  <br>
  <p>Add A Character And School</p>
   <form action = "addcharacter_school.php" method = "POST"> 
      <p>Character ID: <input type="number" name = "cid" min="1" max="500"> </p>
      <p>School ID: <input type="number" name = "sid" min="1" max="500"> </p>
      <br>
      <input type = "submit" value = "Submit">
      </form>
      <form action="showcharacter_school.php" method="POST">
      <br>
      <br>
  </form>

<div align = 'center'>
  <?php
    include 'showcharacter_school.php';
    ?>
    </div>

    <form action="deletecharacter_school.php" method="POST">
 <div align="center">
  </div>

</form>

<br>
  <br>
  <p>Add A Character And Job</p>
   <form action = "addcharacter_job.php" method = "POST"> 
      <p>Character ID: <input type="number" name = "cid" min="1" max="500"> </p>
      <p>Job ID: <input type="number" name = "jid" min="1" max="500"> </p>
      <br>
      <input type = "submit" value = "Submit">
      </form>
      <form action="showcharacter_job.php" method="POST">
      <br>
      <br>
  </form>

<div align = 'center'>
  <?php
    include 'showcharacter_job.php';
    ?>
    </div>

    <form action="deletecharacter_job.php" method="POST">
 <div align="center">
  </div>

</form>
    <br>
    <br>
    <p>To go back to the homepage, click <a href="GGwelcome.php">here</a></p>
    <br>
  </body>
</html>  