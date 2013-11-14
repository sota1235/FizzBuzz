<?php
$i = 1;
while(true){
  if($i % 3 == 0 && $i % 7 == 0){
    echo $i." is FizzBuzz!\n";
  } else {
  $str = ($i % 3) == 0 ? $i." is Fizz\n" : ( $str2 = ($i % 7) == 0 ? $i." is Buzz\n" : "" );
  echo $str;
  }
  $i++;
  if($i == 100) break;
}
?>
