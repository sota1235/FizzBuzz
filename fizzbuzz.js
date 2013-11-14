var num = 1;
while(1){
  document.write(num%3==0 ? (num%7==0 ? "FizzBuzz!<br />" : "Fizz<br />") : (num%7==0 ? "Buzz<br />" : num+"<br />") );
  num++;
  if(num==101) break;
}
