<?php

function add(&$x){  
  $x += 10;         // we add function argunment value
}



$y = 20;          // we take another argunment 
add($y);         // give that new argunment into function 
echo $y;

?>