<?php
include '15_practice_connect.php';

  if(isset($_POST['submit'])){
    $name = $_POST['name'];

    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_path = "uploads/.${image_name}";

    $image_move = move_uploaded_file($image_tmp, $image_path);

    $insert_date = "INSERT into `practice3` (name, image) values ('$name', '$image_move')";
    $result = mysqli_query($connect, $insert_date);

    if($result){
      header('location:15_practice_crud_index.php');
    }
  }


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD Create page in practice 15</title>
</head>
<body>
  <a href="15_practice_crud_index.php">
    <button type="button">Back</button>
  </a>

  <form action="15_practice_create.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="file" name="image">
    <input type="submit" name="submit">
  </form>
</body>
</html>