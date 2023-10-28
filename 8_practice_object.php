<?php

class stuff{
  public $model;
  public $name;

  public function __construct($model, $name)  {
    $this->model = $model;
    $this->name = $name;
  }

    public function massege(){
      return "My phone Model is " . $this->model . " and name is " . $this->name;
    }
}

$myStuff = new stuff("N9", "Nokia");
echo $myStuff-> massege();


?>