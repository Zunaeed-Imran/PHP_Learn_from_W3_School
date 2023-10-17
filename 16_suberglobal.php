<?php

// basic example of php suber global variable

$x = 16;
$y = 19;

function add(){
  $GLOBALS['r'] = $GLOBALS['x'] + $GLOBALS['y'];
}

add();
echo $r;

?>