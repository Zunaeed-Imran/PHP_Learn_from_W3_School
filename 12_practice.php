<?php
if (isset($_POST['submit'])) {
  $file_name = $_FILES['upload']['name'];
  $file_tmp = $_FILES['upload']['tmp_name'];
  $file_size = $_FILES['upload']['size'];
  $file_direction = "uploads/" . $file_name;

  if (move_uploaded_file($file_tmp, $file_direction)) {
    echo 'File is submitted';
  } else {
    $message = 'File could not be uploaded.';
  }
} else {
  $message = 'Form not submitted.';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Simple File Upload</title>
</head>

<body>
  <?php echo $message ?? null ?>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    Upload Image:
    <input type="file" name="upload">
    <input type="submit" name="submit">
  </form>
</body>

</html>