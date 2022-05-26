<?php

// There are three access modifiers:

//     public - the property or method can be accessed from everywhere. This is default
//     protected - the property or method can be accessed within the class and by classes derived from that class
//     private - the property or method can ONLY be accessed within the class


class Student{
    private $name;
    protected $age;
    
    // function __construct($age){
    //     $this->age = $age;
    // }

    function setName($name){
        $this->name = $name;
    }
    function getName(){
        return $this->name;
    }
}
class Mitu{
    function __construct($age){
          $this->age = $age;
    }
    function info(){
        echo "</br>";
        echo "age :",$this->age;
    }
}


$person = new Student();
$person->setName("Mitu");

echo "Name is:",$person->getName();

$person1 = new Mitu(42);
$person1->info();


?>