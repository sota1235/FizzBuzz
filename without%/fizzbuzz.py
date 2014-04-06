def check_multi(n,p):
    while n >= p: n -= p
    return True if n == 0 else False
for i in range(100):
    if check_multi(i,3) and check_multi(i,7):
        print "FizzBuzz"
    else:
        print "Fizz" if check_multi(i,3) else ("Buzz" if check_multi(i,7) else i)
