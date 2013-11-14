#include<stdio.h>

int main(void){
  int num = 1;
  while(1){
    printf("%d",(num%3==0 && num%7==0) ? "FizzBuzz!\n" : (num%3==0 ? "Fizz\n" : (num%7==0 ? "Buzz" : num)));
    num++;
  }
}
