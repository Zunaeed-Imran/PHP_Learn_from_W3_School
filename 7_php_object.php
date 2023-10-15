<?php

class car{
  public $color;      // we use public to use it out of the function or inside it.
  public $model;

  public function __construct($color, $model){    // constructor function is a built in function
        $this->color = $color;
        $this->model = $model;
     }

     public function massege(){
      return "My car is a " .  $this->color . " " . $this->model;
     }
    }


    // we can use multiple out-put as we want
    
   $myCar = new Car("Black", "volvo"); // out-put one
   echo $myCar-> massege();
   echo "<br>"; 

   $myCar = new car("red", "toyota"); // out-put two
   echo $myCar-> massege();
   echo "<br>"; 

   $myCar = new car("Green", "GreenLine"); // out-put three
   echo $myCar-> massege();



?>