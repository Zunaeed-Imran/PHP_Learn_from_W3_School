<?php
include '15_practice_connect.php';

$index_page = "SELECT * from `practice3`";

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <a href="15_practice_create.php">
    <button type="button">Create a User</button>
  </a>

  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Image</th>
      </tr>
    </thead>
  </table>
</body>
</html>