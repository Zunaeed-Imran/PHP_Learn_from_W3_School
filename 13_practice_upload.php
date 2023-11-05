<?php
  if(isset($_POST['submit'])){
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_direction = "uploads/" . $file_name;

    if(move_uploaded_file($file_tmp, $file_direction)){
      $massege = "File is uploaded";
    }else{
      $massege = "File is Not Upload";
    }
  }else{
    $massege = "";
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
<?php echo $massege; ?>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
  Upolad a Image: <br>
  <input type="file" name="image"> 
  <input type="submit" name="submit"> 
</form>
</body>
</html>