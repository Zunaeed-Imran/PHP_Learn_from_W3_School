<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">   // if i use' htmlspecialchars' i need to use both place php and html
    Name: <input type="text" name="name">
    Email: <input type="email" name="email">
    <input type="submit">
  </form>
</body>
</html>

<?php

// example of simple php post method

  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];

  if(empty($name && $email)){
    echo "Empty";
  }else{
    echo "Welcome " . $name . "<br>";
    echo "Your Email is " . $email . "<br>";
  }
?>