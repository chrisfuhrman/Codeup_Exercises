<?php

// Function that creates an error msg if user enters somethiner other than a # for one of the variables
function errorMessage($a, $b) {
	echo "ERROR!!!!! Both arguments must be numbers.  You entered \"$a\" & \"$b\".\n";
}

function validateInput($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		return true;
	}
}

// Addition function
function add($a, $b) {
	if (validateInput($a, $b)) {
		return $a + $b . PHP_EOL;
    } else {
		errorMessage($a, $b);
	}
}

add(10, 5);

// Subtration function
function subtract($a, $b) {
	if (validateInput($a, $b)) {
		return $a - $b . PHP_EOL;
    } else {
		errorMessage($a, $b);
    }
}

subtract(10, 5);

// Multiply function
function multiply($a, $b) {
	if (validateInput($a, $b)) {
		return $a * $b . PHP_EOL;
    } else {
		errorMessage($a, $b);
	}
}

multiply(5, 5);

// Function that creates an error msg if user trys to divide by ZERO.
function errorMessageDivisibleByZero($b) {
	echo "ERROR! You entered \"$b\" for your 2nd input. You cannot divide by ZERO!!\n";
}

// Divisible function
function divide($a, $b) {
	if (validateInput($a, $b)) {
		if ($b != 0) {
			return $a / $b . PHP_EOL;
		} else {
			errorMessageDivisibleByZero ($b);
			return false;
		}
	} else {
		errorMessage($a, $b);
	}
}

divide(500, 5);

// Modulus function
function modulus($a, $b) {
	if (validateInput($a, $b)) {
		if ($b != 0) {
			return $a % $b . PHP_EOL;
		} else {
			errorMessageDivisibleByZero ($b);
			return false;
		}
	} else {
	errorMessage($a, $b);
	}
}

modulus(500, 0);




