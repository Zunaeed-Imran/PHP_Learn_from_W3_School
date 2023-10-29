<?php

class testDestrac{
 public $name;
 public $color;  // i must define two public variable or it won't work

 function __construct($name){
  $this->name = $name;
 }
 function __destruct(){
  echo "The Fruit's is " . $this->name;
 }
}

$apple = new testDestrac("apple");

?>