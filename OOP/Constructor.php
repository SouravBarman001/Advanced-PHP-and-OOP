<?php

class Student{

  public $name,$roll;

  function __construct($name="Sourav Barman",$roll="009")// default value
  {
      $this->name = $name;
      $this->roll = $roll;
  }

  function Print(){
      echo "name:",$this->name;
      echo "<br>";
      echo "roll:",$this->roll;
  }

}

$personOne = new Student("hi",65);

$personOne->Print();




?>