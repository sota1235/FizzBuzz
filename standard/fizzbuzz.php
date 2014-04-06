<?php
for($i=1;$i<=100;$i++){
	echo $str = ($i % 3 == 0 && $i % 7 == 0) ? "FizzBuzz!<br />" : ( ($i % 3) == 0 ? "Fizz<br />" : ( $str2 = ($i % 7) == 0 ? "Buzz<br />" : $i."<br />" ));
}
?>
