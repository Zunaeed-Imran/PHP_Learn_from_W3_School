<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
 <form action="<?php $_SERVER['PHP_SELF'] ?>" method="get">
  Name: <input type="text" name="name">
  <input type="submit">
 </form> 
</body>
</html>

<?php

//simple and basic example of get method

if($_SERVER['REQUEST_METHOD'] == 'GET'){   // nevwe use $_request only use request remember that

  $name = $_REQUEST['name'];

  if(empty($name)){
    echo "Empty";
  }else{
    echo $name;
  }

}


?>