<?php

class itlogiko{
  protected $work;
  protected $time;
  protected $rule;

  function __construct($work, $time, $rule){
      $this->work = $work;
      $this->time = $time;
      $this->rule = $rule;
     }
     public function massege(){
        return "Our office" . $this->work . " " . $this->time . " " . $this->rule;
      }
    }


$officeCode = new car("Software", "9-6", "just concreat and work");
echo $office->massege();



?>