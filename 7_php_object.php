<?php

class car{
  public $color;
  public $model;
  public function __construct($color, $model){
        $this->color = $color;
        $this->model = $model;
     }
     public function massege(){
      return "My car is a " .  $this->color . " " . $this->model;
     }
    }


    
   $myCar = new Car("Black", "volvo");
   echo $myCar-> massege();
   echo "<br>"; 

   $myCar = new car("red", "toyota");
   echo $myCar-> massege();
   echo "<br>"; 

   $myCar = new car("Green", "GreenLine");
   echo $myCar-> massege();
