i=1
for i in 100
  if i%3 is 0
    if i%7 is 0
      document.write("FizzBuzz")
    else
      document.write("Fizz")
  else if i%7 is 0
    document.write("Buzz")
  else
    document.write(i)
