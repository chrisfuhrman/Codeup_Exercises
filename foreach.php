<?PHP

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 
	3.14, "12 + 7", false, (string) 11);

// // Exercise 2
foreach($things as $thing) {
	if (is_int($thing)) {

		echo "$thing is an integer \n";
	}
	if (is_float($thing)) {

		echo "$thing is a float \n";
	}
	if (is_bool($thing)) {

		echo "$thing is a boolean \n";
	}
	if (is_array($thing)) {

		echo "$thing is an array \n";
		
	}
	if (is_null($thing)) {

		echo "$thing is null \n";
	}
	if (is_string($thing)) {

		echo "$thing is a string \n";
	}

}

//Using gettype function Ex #2 re-written:
foreach($things as $thing) {
	echo gettype($thing) . PHP_EOL;
	}


// Exercise 3
foreach($things as $thing) {
	if (is_scalar($thing)) {
		echo "Scalar: $thing \n";
	}
}

//Exercise 4

foreach($things as $thing) {
	if (is_array($thing)) {
		foreach ($thing as $i) {
			echo "$i" . PHP_EOL;
		}
	} 
	else {
	echo "$thing" . PHP_EOL;
	}
}




