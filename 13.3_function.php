<?php


// this function example will set automatically value "50"

function argun(int $min = 50){
  echo "Tha value is: " . $min . "<br>";
}

argun();
argun(300);
argun();
argun(20);

?>