<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
  NAME: <input type="text" name="name">
  <input type="submit">
 </form> 
</body>
</html>

<?php
  echo $_GET['name'];
?>