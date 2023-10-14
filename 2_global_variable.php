<?php

$x = 5;
$y = 10;

function myFun(){
  global $x, $y;
  $y = $x + $y;
}

// myFun(); // we see if we use the global function out put will be "15"
echo $y;    // or only if we print $y out-put will be 10

?>