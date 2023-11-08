<?php
include '31_connect_crud.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Operation Display Page</title>
</head>
<body>
  <div>
    <button><a href="31.2_crud.php">Add User</a></button>
  </div>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Password</th>
        <th>Operation</th>
      </tr>
    </thead>
  </table>
  
</body>
</html>

<?php

$sql = "select * from `blog1`";
$result = mysqli_query($connect, $sql);

if($result){
  while($row = mysqli_fetch_assoc($result)){
      $id = $row['id'];
      $name = $row['name'];
      $email = $row['email'];
      $mobile = $row['mobile'];
      $password = $row['password'];

     echo '<table>
    <tbody>
     <tr>
      <td">'.$id.'</td>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$mobile.'</td>
      <td>'.$password. '</td>
      <td>
        <button><a href="31.4_delete.php?deleteid=<?php echo $id;?>">Detete</a></button>
        <button><a href="">Update</a></button>
      </td>
     </tr>
   </tbody>
    </table>';      
  }
}


?>