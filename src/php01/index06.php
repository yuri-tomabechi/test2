<?php

// $Fizz = "Fizz";
// $Buzz = "Buzz";
// $FizzBuzz = "FizzBuzz";

// for($a = 0; $a <= 50; $a++){
// if($a % 3 === 0){
//     echo $Fizz;
// }elseif($a % 5 === 0){
//     echo $Buzz;
// }elseif($a % 3 === 0 && $a % 5 === 0){
//     echo $FizzBuzz;
// }else{
//     echo  $a ;
// }
// }


$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++) {
  if ($i % 15 == 0) {
    echo $FizzBuzz;
  } else if ($i % 3 == 0) {
    echo $Fizz;
  } else if ($i % 5 == 0) {
    echo $Buzz;
  } else {
    echo $i;
  }
}
