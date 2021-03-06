<?PHP

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);


// Only display books written after 1950

foreach ($books as $title => $info) {
	if ($info['published'] > 1950) {
		echo $title . PHP_EOL;
		foreach ($info as $i => $v2) {
			echo "$info: $v2" . PHP_EOL;	
		}
			echo "\n";
	}
}

