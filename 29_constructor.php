<?php

class testConst{
  public $model;
  public $color;

  public function __construct($model, $color){
    $this->model = $model;
    $this->color = $color;
  }

  function mas1(){
    return $this-> model;
  }
  function mas2(){
    return $this-> color;
  }
}

$res = new testConst("Netro-5", "Black");
echo $res->mas1();
echo '<br>';

echo $res->mas2();
echo '<br>';


?>