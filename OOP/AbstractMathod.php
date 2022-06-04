<?php


abstract class Animal{
     
    protected $name;

    abstract protected function show($name);
    
    }
    class Cat extends Animal{
        public $age;
        public function __construct($n){
            $this->name =$n;
        }
        public function show($age){
           $this->age = $age;
           
        }
        public function showInfo(){
            echo $this->name;
            echo "<br>";
            echo $this->age;
        }
    }

    $test = new Cat("PussyCat");
    $test->show(2);
    $test->showInfo();





?>