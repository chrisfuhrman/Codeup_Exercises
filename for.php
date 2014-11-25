<?PHP

do {fwrite(STDOUT, "\nEnter a starting # \n");

	$userStart = trim(fgets(STDIN));

} while (!is_numeric($userStart));

do {fwrite(STDOUT, "\nEnter a ending # \n");

	$userEnd = trim(fgets(STDIN));

} while (!is_numeric($userEnd));

fwrite(STDOUT, "\nEnter an incrementer \n");

$incrementer = trim(fgets(STDIN));

$incrementer = ($incrementer == '') ? 1 : $incrementer; 

for ($i == $userStart; $i <= $userEnd; $i += $incrementer) {

	echo "{$i}\n";
}

