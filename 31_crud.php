<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      Name <input type="text" name="name"><br>
      Email <input type="text" name="email"><br>
      Mobile <input type="number" name="mobile"><br>
      Password <input type="password" name="password" id=""><br>
      <input type="submit" name="submit">
   </form>
</body>
</html>