<?php
include '31_connect_crud.php';


if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $password = $_POST['password'];

  $sql = "INSERT INTO `blog1` (name,email,mobile,password) 
  values ('$name', '$email', '$mobile', '$password')";    // i have to remember '$name' not $name

  $result = mysqli_query($connect, $sql);

  if($result){
    header('location:31.3_view_crud.php');
  }else{
    mysqli_error($connect);
  }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Operation User input page</title>
</head>
<body>
   <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
      Name <input type="text" name="name"><br>
      Email <input type="text" name="email"><br>
      Mobile <input type="number" name="mobile"><br>
      Password <input type="password" name="password" id=""><br>
      <input type="submit" name="submit">
   </form>
</body>
</html>