<?php

// simple example index array in php

$x = array("Volvo", "toyota", "BMW");

$y = count($x);                  // we take count function to loop it through

for($i = 0; $i <= $y; $i++){
  echo $x[$i] . "<br>";         // we print array in all loop.
}

?>