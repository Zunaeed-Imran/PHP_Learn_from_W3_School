<?php

if(isset($_POST['submit'])){
  $file_name = $_FILES['uplaod']['name'];
  $file_tmp = $_FILES['upload']['tmp_name'];
  $file_size = $_FILES['upload']['size'];
  $file_direction = "uploads" . $file_name;

  move_uploaded_file($file_tmp, $file_direction);
  echo '<p style = "color: green">Upload SucessFully</p>';

}else{
  $massege = '<p style = "color:red;">File is Not Upload</p>';
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
  <?php echo $massege ?? null; ?>
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    Upload Image File: <br>
    <input type="file" name="upload">
    <input type="submit" name="submit">
  </form>
</body>
</html>