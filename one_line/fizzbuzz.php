<?php for($i=1;$i<=100;$i++) echo ($i%3==0 xor $i%7==0) ? ($i%3==0 ? "FizzBuzz<br />" : $i."<br />"): ($i%3==0 ? "Fizz<br />" : "Buzz<br />"); 
if(2==2 xor 3==3){
	echo "true";
} else {
	echo "false"
}
?>
