<?php

class test4{
  public $x;

  function test_f($x){
    $this->x = $x;
  }
}
  $y = new test4();
  $y->test_f("Testing");

  echo $y->x;


?>