<?php

$connect = new mysqli('localhost', 'root', '', 'itlogiko');

if($connect){
  
}else{
  var_dump(die(mysqli_error_list($connect)));
}

?>

