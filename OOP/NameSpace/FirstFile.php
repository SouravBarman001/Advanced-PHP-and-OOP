<?php
//require ('./SecondFile.php');

namespace first;

class Test{
  
   public function __construct(){
        // echo "This is 1st file<br>";
         $text = new \second\Test;
    }
    // public function Wow(){
    //     echo "wow from 1st file";
    // }

}
?>