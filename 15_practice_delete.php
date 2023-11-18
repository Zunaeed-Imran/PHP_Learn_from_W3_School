<?php
include '15_practice_connect.php';

if($connect->query("DELETE from `practice3` WHERE `id` = {$_REQUEST['id']}")){
  header('location:15_practice_crud_index.php');
}else{
  die(mysqli_error($connect));
}