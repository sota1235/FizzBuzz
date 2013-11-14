var num = 1;
while(1){
  if(num%3==0){
    document.write(num%7==0 ? "FizzBuzz!<br />" : "Fizz<br />");
  } else {
    document.write(num%7==0 ? "Buzz<br />" : num+"<br />");
  }
  num++;
  if(num==100) break;
}
