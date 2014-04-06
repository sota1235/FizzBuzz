#include<stdio.h>

int main(void){
  int num = 1;
  char str[12];
  for(num=1;num<=100;num++){
    sprintf(str,"%d",num);
    printf("%s\n",(num%3==0 && num%7==0) ? "FizzBuzz!" : (num%3==0 ? "Fizz" : (num%7==0 ? "Buzz" : str)));
  }
}
