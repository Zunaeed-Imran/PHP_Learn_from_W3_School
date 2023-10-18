<?php
// PHP $_GLOBAL Example

$a = 5;
$b = 130;

function hhh(){
  $GLOBALS['v'] = $GLOBALS['a'] * $GLOBALS['b'];
}

hhh();
echo $v;

?>