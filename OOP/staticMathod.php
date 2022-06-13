<?php

// we have to declare self to access static member in this class

// class Personal{
//     public static $name = "Google";
    
//     public static $age = 21;

//     static function showName(){
//         echo self::$age;
//     }
// }

// echo Personal::$name;
// echo "<br>";
// Personal::showName();


// class greeting{
//     public static function welcome(){
//         echo "Hello world!";
//     }
//     public function __construct(){xsza
//         self::welcome();
//     }
// }

// new greeting();

// access static propertises in inheritance 
class A{
    public static $name = "razu";

}

class B extends A{
    public static function showInfo(){
        echo A::$name;
    }
}

B::showInfo();
?>