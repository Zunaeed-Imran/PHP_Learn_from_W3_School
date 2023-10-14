<?php

$x = 5;
$y = 10;

function myFun(){
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

MyFun(); // we see if we use the global array function out put will be "15"
echo $y; // or only if we print $y out-put will be 10

?>