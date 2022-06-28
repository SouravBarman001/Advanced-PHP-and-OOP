<?php
/*
 -->Anonymous function is a function without any user defined name.
 ->Such a function is also called closure or lambda function. 
 ->Sometimes, you may want a function for one time use


*/

/**
  1.Anonymous function
 function makeGreeting($name, $timeOfDay){
    return $timeOfDay." ". $name."!";
  }
    
  echo makeGreeting("Sourav","Good Morning");
  //Result: Good Morning Sourav!

// Assign an anonymous function to a variable
 $makeGreeting = function( $name, $timeOfDay ) {
    return "Good $timeOfDay, $name!";
  };
  echo $makeGreeting("Sourav","Morning"); 
  //Result: Good Morning Sourav!

   // 2. Lambda function
   // Pass 'anonymous function' to function --> Lambda function
  function shout ($message){
    echo $message();
  }
    
  // Call function
  shout(function(){
    return "Hello world";
  });


  3. Anonymous function as closure
  --> Closure is also an anonymous function that can access variables outside its scope with the help of use keyword
$maxmarks=300;
$percent=function ($marks) use ($maxmarks) {return $marks*100/$maxmarks;};
echo "marks=285 percentage=". $percent(285);
 4. Callback Functions
 -->A callback function is a function which is passed as an argument into another function.
 */
function my_callback($item) {
    return strlen($item);
  }
  
  $strings = ["apple", "orange", "banana", "coconut"];
  $lengths = array_map("my_callback", $strings);
  print_r($lengths);
?>