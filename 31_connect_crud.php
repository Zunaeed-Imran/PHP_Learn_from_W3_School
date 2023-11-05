<?php

$connect = new mysqli('localhost', 'root', '', 'practice1');

if($connect){
  echo "Connect sucessful";
}else{
  var_dump(die(mysqli_error_list($connect)));
}

?>