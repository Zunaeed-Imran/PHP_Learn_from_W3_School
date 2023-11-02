<?php

  $allowed_ext = array('png', 'jpeg', 'gif', 'jpg');

  if(isset($_POST['submit'])){
    if(!empty($_FILES['upload']['name'])){
      $file_name = $_FILES['upload']['name'];
      $file_size = $_FILES['upload']['size'];
      $file_tmp = $_FILES['upload']['tmp_name'];
      $terget_dir = "uploads/${file_name}";



      $file_ext = explode('.', $file_name);
      $file_ext = strtolower(end($file_ext));



      if(in_array($file_ext, $allowed_ext)){

        if($file_size <= 1000000){
          
          move_uploaded_file($file_tmp, $terget_dir);



          echo '<p style = "color: green;">File is uploaded</p>';
        }else{
          echo '<p style = "color: red;">File is too Large</p>';
        }
      }else{
         $message =  '<p style = "color: red;">Invalid File Type</p>';
      }
    }else{
      $message = '<p style= "color: red;">Please a file</p>';
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>
<body>
  <?php echo $message ?? null; ?>
 <form action="<?php echo htmlspecialchars(
        $_SERVER['PHP_SELF']
        ); ?>" method="post" enctype="multipart/form-data">
  Select Image to Upload: <br>
  <input type="file" name="upload"><br>
  <input type="submit" name="submit" value="submit">

 </form> 
</body>
</html>