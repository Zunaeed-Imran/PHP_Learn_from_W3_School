<?php

// simple two dimentional array

$x = array(
    array("Imran", 25),
    array("Lam", 20),
    array("Dip", 24)
);


echo $x[0][0] . " " . $x[0][1] . "<br>";       // we have to use <br> end of the line
echo $x[1][0] . " " . $x[1][1] . "<br>";       // or it will break before and make problem to understand
echo $x[2][0] . " " . $x[2][1] . "<br>";




?>