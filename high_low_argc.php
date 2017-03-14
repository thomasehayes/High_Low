<?php 
$random = rand(1, 100);

if ($argc >= 3 && is_numeric($argv[1]) && is_numeric($argv[2])){
	$random = rand($argv[1], $argv[2]);
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