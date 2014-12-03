<?php

$nothing = null;
$something = '';
$array = array(1, 2, 3);

// Create a function that checks if a variable is set or empty, 
// and display "$variable_name is SET|EMPTY"
function isSetOrEmpty($variable) {
	if (isset($variable)) {
		return "Variable is SET" . PHP_EOL;
	} elseif (empty($variable)) {
		return "Variable is EMPTY" . PHP_EOL;
	}
}

echo isSetOrEmpty($something);
echo isSetOrEmpty($nothing);


$serializedArray = serialize($array);
echo $serializedArray . PHP_EOL;
$unserializedArray = unserialize($serializedArray);
print_r($unserializedArray);




