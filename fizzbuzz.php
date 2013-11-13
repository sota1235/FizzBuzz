<?php
$i = 1;
while(1){
  if($i % 3 == 0 && $i % 7 == 0){
    echo $i++." is FizzBuzz!\n";
  } else if($i % 3 == 0){
    echo $i++." is Fizz\n";
  } else if($i % 7 == 0){
    echo $i++." is Buzz\n";
  }
}
?>
