<?php

$a = 5; $b = 10; $c = '10';

if ($a < $b) {
    echo "$a is less than $b";
} elseif ($b > $a) {
    echo "$b is greater than $a";
}

if ($b >= $c) {
    echo "$b is greater than or equal to $c\n";
} elseif ($b <= $c) {
    echo "$b is less than or equal to $c\n";
}

if ($b == $c) {
    echo "$b is equal to $c";
} elseif ($b === $c) {
    echo "$b is identical to $c";
} elseif ($b != $c) {
    echo "$b is not equal to $c";
} elseif ($b !== $c) {
    echo "$b is not identical to $c";
}	

$a = 5; $b = 10; $c = '10';


// ARE THESE THE SAME THING?????
if ($a < $b) {
    echo "$a is less than $b \n";
}
// Ternary version
echo ($a < $b) ? "t $a is less than $b" : "t $a is greater than b";








