# coding: UTF-8
# Copyright : sota1235
# Date : 2013/12/09
# HowToUse : py fizzbuzz.py str1 str2 str3...
# fizz,buzz,fizzbuzzのリストを受け取り、
# その並びが登場する始端と終端を返す

import sys

# fizz,buzz列
list1 = {3:'Fizz',6:'Fizz',7:'Buzz',9:'Fizz',12:'Fizz',14:'Buzz',15:'Fizz',18:'Fizz',21'FizzBuzz'}
list2 = {21:'FizzBuzz',24:'Fizz',27:'Fizz',28:'Buzz',30:'Fizz',33:'Fizz',35:'Buzz',36:'Fizz',39:'Fizz'}

argvs = sys.argv
argc = len(argvs)


