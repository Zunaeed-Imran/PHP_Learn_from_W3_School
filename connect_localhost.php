<?php

$connect = new mysqli('localhost', 'root', '', 'itlogiko');

if(isset($connect)){
  echo "sucessful";
}else{
  die(mysqli_error($connect));
}
?>