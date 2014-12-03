<?php

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

function humanizedList($physicistsString) {
	$array = explode(', ', $physicistsString);
	$addName = array_pop($array);

	$famousFakePhysicists = implode(', ', $array);
	return "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists} and {$addName}.\n";

}

echo humanizedList($physicistsString);