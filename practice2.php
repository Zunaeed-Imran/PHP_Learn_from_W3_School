<?php
// PHP $_GLOBAL Example

$a = 59;
$b = 25;

function hhh(){
  $GLOBALS['v'] = $GLOBALS['a'] * $GLOBALS['b'];
}

hhh();
echo $v;

?>