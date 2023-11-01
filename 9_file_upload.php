<?php
  if(isset($_POST['submit'])){
    if(!empty($_FILES['upload']['name'])){
      $file_name = $_FILES['upload']['name'];
      $file_size = $_FILES['upload']['size'];
      $file_tmp = $_FILES['upload']['tmp_name'];
      
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

 <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
  Upload a Image:
  <input type="file" name="image">
  <input type="submit" name="submit" value="submit">

 </form> 
</body>
</html>