<?php

class Employee{
    
    public $name;
    public $age;
    public $salary;

    function __construct($name,$age,$salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;

    }

    function info(){
        echo "<h3>Employee info</h3>";
        echo "Employee name :",$this->name;
        echo "<br>";
        echo "Employee age :",$this->age;
        echo "<br>";
        echo "Employee salary :",$this->salary;
        echo "<br>";

    }

}

class Manager extends Employee{
    function info(){
        echo "<h3>Manager info</h3>";
        echo "Employee name :",$this->name;
        echo "<br>";
        echo "Employee age :",$this->age;
        echo "<br>";
        echo "Employee salary :",$this->salary;

    }
}

$personOne = new Employee("Sourav",21,45000);
$personOne->info();

$personTwo = new Employee("Mitu",23,55000);
$personTwo->info();

?>