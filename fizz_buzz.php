<?php

// Write a program that prints the numbers from 1 to 100. 
// But for multiples of three print “Fizz” instead of the number 
// and for the multiples of five print “Buzz”. 
// For numbers which are multiples of both three 
// and five print “FizzBuzz”."

$num1 = 1;
while ($num1 <= 100) {
	if (($num1 % 3 == 0) && ($num1 % 5 == 0)) {
		echo "FizzBuzz" . PHP_EOL;
	} elseif ($num1 % 3 == 0) {
		echo "Fizz" . PHP_EOL;
	} elseif ($num1 % 5 == 0) {
		echo "Buzz" . PHP_EOL;
	} else {
		echo "$num1" . PHP_EOL;
	}
$num1++;
}
