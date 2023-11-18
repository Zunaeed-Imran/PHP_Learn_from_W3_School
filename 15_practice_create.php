<?php
include '15_practice_connect.php';




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Create page in practice 15</title>
</head>
<body>
  <a href="15_practice_crud_index.php">
    <button type="button">Back</button>
  </a>

  <form action="15_practice_create.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="file" name="image">
    <input type="submit" name="submit">
  </form>
</body>
</html>