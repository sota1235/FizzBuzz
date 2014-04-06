for i in range(100):
    if (i+1)%3 == 0:
        if (i+1)%7 == 0:
            print "FizzBuzz"
        else:
            print "Fizz"
    elif (i+1)%7 == 0:
        print "Buzz"
    else:
        print str(i+1)
