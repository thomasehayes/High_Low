<?php 
$min = 1;
$max = 100;

if ($argc >= 3 && is_numeric($argv[1]) && is_numeric($argv[2])){
	$min = $argv[1];
	$max = $argv[2];
} else if ($argc >= 3 && (!is_numeric($argv[1]) || !is_numeric($argv[2]))) {
	fwrite(STDOUT, "Add numeric min value" . PHP_EOL);
	$min = trim(fgets(STDIN));
	fwrite(STDOUT, "Add numeric max value" . PHP_EOL);
	$max = trim(fgets(STDIN));
}
$random = rand($min, $max);

fwrite(STDOUT, "Guess a number between $min and $max" . PHP_EOL);
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