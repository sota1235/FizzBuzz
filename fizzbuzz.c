#include<stdio.h>

int main(void){
  int num = 1;
  while(1){
    if(num%3==0 && num%7==0){
      printf("%d is FizzBuzz!\n",num);
    } else if(num%3==0){
      printf("%d is Fizz\n",num);
    } else if(num%7==0){
      printf("%d is Buzz\n",num);
    }
    num++;
  }
}
