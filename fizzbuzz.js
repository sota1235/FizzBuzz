var num = 1;
while(1){
  if(num%3==0){
    /*
    if(num%7==0){
      document.write("FizzBuzz!");
    } else {
      document.write("Fizz");
    }
    */
    document.write(num%7==0 ? "FizzBuzz!" : "Fizz");
  } else if(num%7==0){
    document.write("Buzz");
  } else {
    document.write(num);
  }
  num++;
}
