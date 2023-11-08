<?php
include '31_connect_crud.php';

if(isset($_POST['deleteid'])){
  $id = $_POST['deleteid'];
  
  $sql = "DELETE FROM `blog1` where id = $id";      // i should remember we can't use '*' in delete sql;
  $result = mysqli_query($connect, $sql);
  
  if($result){
    header('location:31.3_view_crud.php');
  }else{
    die(mysqli_error($connect));
  }
}


?>