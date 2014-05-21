<?php
// create a number

// prompt user to guess a number

// get a guess from user

// check the number and the guess

// if guess is higher than number echo "lower"

// prompt user to guess again

// if guess is lower than number echo "higher"

// prompt user to guess again

// add to the guess count

// if guess is equal to number echo "Winner!" and end the game

// end the loop

if ($argc < 3) {
	echo "I need a min and max number. Please input 2 numbers after the filename!\n";
	exit(1);
}
$number = rand ($argv[1] , $argv[2]);


fwrite(STDOUT, "Pick a number. What is your number?\n ");

$number_of_guesses = 0;

$guess = fgets(STDIN);

/*if ($guess == $number) { 
	echo "Winner";
}

elseif ($guess > $number) { 
	echo "LOWER"; 
}

elseif ($guess < $number) { 
	echo "HIGHER"; 
} */

do { 

	if ($guess > $number) { 
		echo "LOWER"; 
		$guess = fgets(STDIN);
	} elseif ($guess < $number) {  
		echo "HIGHER"; 
		$guess = fgets(STDIN);
	//echo "TRY AGAIN";
	}
} while ($guess != $number);

$number_of_guesses++;

fwrite (STDOUT, "You guessed right in $number_of_guesses guesses!\n");


