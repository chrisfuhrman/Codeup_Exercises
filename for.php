<?PHP

do {fwrite(STDOUT, "\nEnter a starting # \n");

	$userStart = trim(fgets(STDIN));

} while (!is_numeric($userStart));

do {fwrite(STDOUT, "\nEnter a ending # \n");

	$userEnd = trim(fgets(STDIN));

} while (!is_numeric($userEnd));

do { fwrite(STDOUT, "\nEnter an incrementer \n");

	$increment = trim(fgets(STDIN));

} while (!is_numeric($increment));

if ($increment != 0) {

	for ($i == $userStart; $i <= $userEnd; $i += $increment) {

		echo "{$i}\n";
	}
}

else {

	for ($i == $userStart; $i <= $userEnd; $i++) {

			echo "{$i}\n"; 
	}
}

