<!DOCTYPE html>
<html>
<head>
<title>To-Do List</title>
<meta charset = 'utf-8'>
</head>

<body>

   <form action = "additem.php" method = "POST"> 

      <p>Title: <input type = "text" name = "title"> </p>
      <p>Description: <input type = "text" name = "description"> </p>
      <p>Due Date: <input type="date" name="duedate" min="2015-03-16"></p>
      <p>Completed: <input type="checkbox" name="flag" value="1"></p>

      <br>
      <input type = "submit" value = "Submit">
      </form>
      <form action="showitem.php" method="POST">
      <br>
      <br>
  </form>

<div align = 'center'>
  <?php
    include 'showitem.php';
    ?>
    </div>

    <form action="deleteitem.php" method="POST">
 <div align="center">
  </div>

</form>

</body>
</html>