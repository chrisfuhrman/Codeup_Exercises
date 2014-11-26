<?php
$d = 10;
$a = 0;
do {
	echo "$a \n";
	$a += 2;
} while ($a >= 0 && $a <=100);

"\n";

$a = 100;
do {
	echo "$a \n";
	$a -= 5;
} while ($a >= -10 && $a <=95);

"\n";

$a = 2;
do {
	echo $a . PHP_EOL;
	$a *= $a;
} while ($a < 1000000);
