<?php

// Function that creates an error msg if user enters somethiner other than a # for one of the variables
function errorMessage($a, $b) {
	echo "ERROR!!!!! Both arguments must be numbers.  You entered \"$a\" & \"$b\".\n";
}

// Addition function
function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a + $b . PHP_EOL;
    } else {
		echo errorMessage($a, $b);
	}
}

add(five, 5);

// Subtration function
function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a - $b . PHP_EOL;
    } else {
	echo errorMessage($a, $b);
    }
}

subtract(a, 5);

// Multiply function
function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a * $b . PHP_EOL;
    } else {
	echo errorMessage($a, $b);
	}
}

multiply(5, a);

// Function that creates an error msg if user trys to divide by ZERO.
function errorMessageDivisibleByZero($b) {
	echo "ERROR! You entered \"$b\" for your 2nd input. You cannot divide by ZERO!!\n";
}

// Divisible function
function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if ($b != 0) {
			echo $a / $b . PHP_EOL;
		} else {
			echo errorMessageDivisibleByZero ($b);
		}
	} else {
	echo errorMessage($a, $b);
	}
}

divide(500, 0);

// Modulus function
function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if ($b != 0) {
			echo $a % $b . PHP_EOL;
		} else {
			echo errorMessageDivisibleByZero ($b);
		}
	} else {
	echo errorMessage($a, $b);
	}
}

modulus(500, 0);




