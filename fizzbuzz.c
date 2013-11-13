#include<stdio.h>

int main(void){
  int num = 1;
  while(1){
    if(num%3==0 && num%7==0){
      printf("%d is FizzBuzz!",num);
    } else if(num%3==0){
      printf("%d is Fizz",num);
    } else if(num%7==0){
      printf("%d is Buzz",num);
    }
    num++;
  }
}
