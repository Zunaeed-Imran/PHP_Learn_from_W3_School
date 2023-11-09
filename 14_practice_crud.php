<?php
include 'connect_localhost.php';

if (isset($_GET['submit'])) {
  $name = $_GET['name'];

  $sql = "INSERT INTO `practice` (name) values ('$name')";

  $result = mysqli_query($connect, $sql);

  if ($result) {
    header('location:14_practice_crud.php');
  } else {
    die(mysqli_error($connect));
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
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <input type="text" name="name">
    <input type="submit" name="submit">
  </form>
</body>

</html>