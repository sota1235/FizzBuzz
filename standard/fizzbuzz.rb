i = 0
loop {
  i += 1
  if i % 3 == 0 then
    if i % 5 == 0 then
      puts "FizzBuzz"
    else
      puts 'Fizz'
    end
  else
    if i % 5 == 0 then
      puts 'Buzz'
    else
      puts i
    end
  end

  break if i == 100
}
