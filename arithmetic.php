<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a + $b . PHP_EOL;
    } else {
        echo "ERROR!!!!! Both arguments must be numbers.  You entered \"$a\" & \"$b\".\n";
    }
}

add(five, 5);

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a - $b . PHP_EOL;
    } else {
        echo "ERROR!!!!! Both arguments must be numbers. You entered \"$a\" & \"$b\".\n";
    }
}

subtract(a, 5);

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo $a * $b . PHP_EOL;
    } else {
        echo "ERROR!!!!! Both arguments must be numbers. You entered \"$a\" & \"$b\".\n";
    }
}

multiply(5, a);

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if ($b != 0) {
			echo $a / $b . PHP_EOL;
		} else {
			echo "ERROR! You entered $b for your 2nd input. You cannot divide by ZERO!!\n";
		}
	} else {
        echo "ERROR!!!!! Both arguments must be numbers. You entered \"$a\" & \"$b\".\n";
    }
}

divide(500, a);

// function modulus($a, $b) {
// 	if (is_numeric($a) && is_numeric($b)) {
// 		echo $a % $b . PHP_EOL;
//     } else {
//         echo "ERROR!!!!! Both arguments must be numbers\n";
//     }
// }


// modulus(5, 5);


