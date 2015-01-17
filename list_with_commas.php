<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';



function humanizedList($physicistsString) {
	
	$array = explode(', ', $physicistsString);

	echo 'sort alphabetically? (Y) or (N)';
	$sort = trim(fgets(STDIN));

	//sort array by first name, if user wants it.
	if ($sort == 'Y') {
		sort($array);
	}
	
	//pop off last person in order to add 'and' in the string (to add back later)
	$lastName = array_pop($array);

	$famousFakePhysicists = implode(', ', $array);
	return "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists} and {$lastName}.\n";

}

echo humanizedList($physicistsString);