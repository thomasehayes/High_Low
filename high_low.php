<?php 
$random = rand(1, 100);
fwrite(STDOUT, "Guess a number between 1 and 100!" . PHP_EOL);
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