<?php
include '15_practice_connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="">
    <button type="button">Back</button>
  </a>

  <form action="15_practice_edit.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="file" name="image">
    <input type="submit" name="submit">
  </form>

</body>
</html>