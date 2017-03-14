<?php 
$min = 1;
$max = 100;
$random = rand($min, $max);

if ($argc >= 3 && is_numeric($argv[1]) && is_numeric($argv[2])){
	$min = $argv[1];
	$max = $argv[2];
	$random = rand($min, $max);
} else if ($argc >= 3 && (!is_numeric($argv[1]) || !is_numeric($argv[2]))) {
	fwrite(STDOUT, "Add min values" . PHP_EOL);
	$min = trim(fgets(STDIN));
	fwrite(STDOUT, "Add max values" . PHP_EOL);
	$max = trim(fgets(STDIN));
	$random = rand($min, $max);
}

fwrite(STDOUT, "Guess a number" . PHP_EOL);
$playerGuess = trim(fgets(STDIN));

do {
	if ($playerGuess > $random) {
		echo "LOWER" . PHP_EOL;
		$playerGuess = trim(fgets(STDIN));
	} else if ($playerGuess < $random) {
		echo "HIGHER" . PHP_EOL;
		$playerGuess = trim(fgets(STDIN));
	}
} while ($playerGuess != $random);
	echo "GOOD GUESS". PHP_EOL;

?>