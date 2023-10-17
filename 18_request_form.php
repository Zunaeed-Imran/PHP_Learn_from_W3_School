<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    Name:<input type="text" name="x" id="x">
    <input type="submit">
  </form>
</body>
</html>



<?php


if($_SERVER['REQUEST_METHOD'] == 'POST'){   // remember to use same variable all time
  $x = htmlspecialchars($_REQUEST['x']);    // we use htmlchar for not get any virus code input like alert

  if (empty($x)){
    echo "Name is empty";
  } else {
    echo $x;
  }
}


?>