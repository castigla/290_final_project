<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="gghomestyling.css">
  <title>Gilmore Girls</title>
  </head>

  <body>
    <h1>Gilmore Girls</h1>

    <p>Check the characters below and include the date added to add them to your favorites list!</p>
    <br>
  <p>Characters to Choose From</p>

      </form>
      <form action="showallcharacters.php" method="POST">
  </form>

<div align = 'center'>
  <?php
    include 'showallcharacters.php';
    include 'fav_character_table.php';
    ?>
    </div>

    <form action="fav_character_table.php" method="POST">
 <div align="center">
  </div>

</form>
<br>
<p>To return to the welcome page, click <a href="GGwelcome.php">here</a>.</p>
<br>
<br>