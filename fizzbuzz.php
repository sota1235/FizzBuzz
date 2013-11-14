<?php
$i = 1;
while(true){
  if($i % 3 == 0 && $i % 7 == 0){
    echo "FizzBuzz!<br />";
  } else {
    echo $str = ($i % 3) == 0 ? "Fizz<br />" : ( $str2 = ($i % 7) == 0 ? "Buzz<br />" : $i."<br />" );
  }
  if($i++ == 100) break;
}
?>
