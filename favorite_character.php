<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="gghomestyling.css">
  <title>Gilmore Girls</title>
  </head>

  <body>
    <h1>Gilmore Girls</h1>

    <h2>Welcome! This page allows you to create your very own private list of favorite characters. </h2>

    <p>Click the characters below to add them to your favorites list!</p>
    <br>
     <form action="favorite_picture.php" method="POST">
      
 <div align="center">
  <?php
  include 'favorite_picture.php';
  ?>
  </div>

</form>
<br>


<form action="fav_character_table.php" method="POST">
 <div align="center">
  </div>

</form>

      <p>Characters to Choose From</p>
      <form action="showallcharacters.php" method="POST">
  </form>

<div align = 'center'>
  <?php
    include 'showallcharacters.php';
    include 'fav_character_table.php';
    ?>
    </div>

    
<br>
<p>To return to the welcome page, click <a href="GGwelcome.php">here</a>.</p>
<p>To logout, click <a href="logout.php">here</a>.</p>
<br>
<br>