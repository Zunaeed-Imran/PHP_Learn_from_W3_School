<?php
include '31_connect_crud.php';

if(isset($_POST['deleteid'])){
  $id = $_POST['deleteid'];
  
  $sql = 'delete * from `blog1` where id = $id';
  $result = mysqli_query($connect, $sql);
  
  if($result){
    header('location:31.3_view_crud.php');
  }else{
    die(mysqli_error($connect));
  }
}


?>