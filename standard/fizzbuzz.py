for i in range(1,101):
    if i%3 == 0:
        if i%7 == 0:
            print "FizzBuzz"
        else:
            print "Fizz"
    elif i%7 == 0:
        print "Buzz"
    else:
        print str(i)
