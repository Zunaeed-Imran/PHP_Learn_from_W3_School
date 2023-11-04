<?php
if(isset($_POST['submit'])){                    // remember to use isset
  $file_name = $_FILES['upload']['name'];     // remember to use $_FILES
  $file_size = $_FILES['upload']['size'];
  $file_tmp = $_FILES['upload']['tmp_name'];
  $file_direction = "uploads/" . $file_name;


  if(move_uploaded_file($file_tmp, $file_direction)){
    $massege = 'File is Uploaded';
  }else{
    $massege = "file i not Uploaded";
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
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">                                                     // remember to use enctype
    <input type="file" name="upload"><br>
    <input type="submit" name="submit" value="upload">
  </form> 
</body>
</html>