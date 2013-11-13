#include<stdio.h>

int main(void){
  int num = 1;
  while(1){
    if(num%3==0 && num%7==0){
      printf("FizzBuzz!");
    } else if(num%3==0){
      printf("Fizz");
    } else if(num%7==0){
      printf("Buzz");
    }
    num++;
  }
}
