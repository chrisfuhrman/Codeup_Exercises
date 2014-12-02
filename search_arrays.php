 <?php

 // first names
 $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

 $names2 = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


 function searchArray($query, $names) {

 	$result = array_search($query, $names);

 	if ($result === 0) {
 		return 'true';
 	} elseif ($result >= 1) {
		return 'true';
 	} else {
 		return 'false';
 	}
 }

 echo searchArray('Tina', $names) . PHP_EOL;
 echo searchArray('Bob', $names) . PHP_EOL;


function compareArrays($names, $names2) {
	$count = 0;
	foreach ($names as $name) {
		if (array_search($name, $names2) !== false) {
			$count++;
		}
	
	}
	return $count;
}

echo "The number of common values is: " . compareArrays($names, $names2) . PHP_EOL;


 