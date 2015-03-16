<!DOCTYPE html>
<html>
 <head>
  <meta charset="UTF-8"/>
  <link rel="stylesheet" type="text/css" href="gilmoregirlsstyling.css">
  <title>GG Search</title>
  </head>

  <body>
    <h3>Search by character hometown</h3>
     <form action = "selecthometown.php" method = "POST">
      <p>Hometown: <input type = "text" name = "city"> </p>
      <br>
      <input type = "submit" value = "Submit">
      <br>
     </form>

<div align = 'center'>
  <?php
    include 'selecthometown.php';
    ?> 
    </div>
 <br>
    <br>
    <h3>Search by everyone that worked at the same job</h3>
     <form action = "searchjob.php" method = "POST">
      <p>Job: <input type = "text" name = "name"> </p>
      <br>
      <input type = "submit" value = "Submit">
      <br>
     </form>

<div align = 'center'>
  <?php
    include 'searchjob.php';
    ?> 
    </div>
    <br>
    <br>
    <h3>Search by everyone that has gone to the same school</h3>
     <form action = "searchschool.php" method = "POST">
      <p>School: <input type = "text" name = "name"> </p>
      <br>
      <input type = "submit" value = "Submit">
      <br>
     </form>

<div align = 'center'>
  <?php
    include 'searchschool.php';
    ?> 
    </div>
    <br>
    <br>
    <p>To go back to the homepage, click <a href="GGwelcome.php">here</a></p>
    <br>


  </body>
</html>  