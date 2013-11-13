var num = 1;
while(1){
  if(num%3==0){
    if(num%7==0){
      document.write(num + "is FizzBuzz!");
    } else {
      document.write(num + "is Fizz");
    }
  } else if(num%7==0){
    document.write(num + "is Buzz");
  }
  num++;
}
