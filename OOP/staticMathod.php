<?php

// class Personal{
//     public static $name = "Google";
    
//     public $age = 21;

//     public static function showName(){
//         echo "age : 21";
//     }
// }

// echo Personal::$name;
// echo "<br>";
// Personal::showName();


class greeting{
    public static function welcome(){
        echo "Hello world!";
    }
    public function __construct(){
        self::welcome();
    }
}

new greeting();




?>