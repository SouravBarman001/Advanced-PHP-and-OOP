<?php
// include("./InheritanceExample.php");
//  $std = new Employee("Sourav",21,45000);
//  $personOne->info();

// example :1
// interface Animal {
//   public function makeSound();
// }

// class Cat implements Animal {
//   public function makeSound() {
//     echo "Meow";
//   }
// }

// $animal = new Cat("hi");
// $animal->makeSound();


interface MyInterfaceName{

	public function method1($n);
	public function method2();
}

class MyClassName implements MyInterfaceName{

	public function method1($n){
		echo "Method1 Called".$n;
        echo "<br>";
	}
	public function method2(){
		echo "Method2 Called". "\n";
	}
}

$obj = new MyClassName();
$obj->method1("pk");
$obj->method2();



?>