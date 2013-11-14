<?php
$i = 1;
while(true){
	echo $str = ($i % 3 == 0 && $i % 7 == 0) ? "FizzBuzz!<br />" : ( ($i % 3) == 0 ? "Fizz<br />" : ( $str2 = ($i % 7) == 0 ? "Buzz<br />" : $i."<br />" ));
  if($i++ == 100) break;
}
?>
