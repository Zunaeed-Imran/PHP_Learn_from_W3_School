<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    Name: <input type="text" name="name" id="fname">
    <input type="submit">
  </form>

</body>
</html>


<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = htmlspecialchars($_REQUEST)
}


?>