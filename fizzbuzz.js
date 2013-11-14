var num = 1;
document.open();
while(1){
  if(num%3==0){
    document.write(num%7==0 ? "FizzBuzz!<br />" : "Fizz<br />");
  } else if(num%7==0){
    document.write("Buzz<br />");
  } else {
    document.write(num+"<br />");
  }
  num++;
  if(num==100) break;
}
document.close();
