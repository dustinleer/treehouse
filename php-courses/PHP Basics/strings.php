<?php

	/* Escape Sequence Example */
	$name = 'Alena';
	$string_one = "Learning to display \"Hello $name!\" to the screen.\n";
	
	/* Combining Strings with concatentation */
	$string_one = 'Learning to display ';
	$string_one .= '"Hello ';
	$string_one .= $name;
	$string_one .= '!" to the screen.';
	// $string_one = $string_one . "\n";
	// Prepend to a string
	// $string_one = 'I am ' . $string_one;
	// echo $string_one;

	/* Concatentaion
		Use		When				Example
		""		Single variable		$myString = "Adding single variable $string to this string.";

		.		Single line			$myString = 'Combining multiple' . $strings . 'on one line.";

		.=		Multiple lines		$myString = 'Combining multiple lines';
									$myString .= $strings;
									$myString .= 'by using the assignment operator';
	*/

	/*
		String Manipulation Quiz solution included due to having issues, is here for showing how I debugged.
	*/

	/*
		//Place your code below this comment
		$firstName = 'Rasmus';
		$lastName = 'Lerdorf';
		// $fullName = $firstName . ' ' . $lastName . "\n"; this also did not work
		$fullName = $firstName . ' ' . $lastName;

		// echo $fullName . "\n"; this did not work
		echo $fullName . " was the original creator of PHP.\n";
	*/

	// Booleans
	$isReady = true;
	// var_dump($isReady);
	// Order of operation is top down.
	$isReady = false;
	// var_dump($isReady);

	// Comparing Values
	/*
	 Comparison operators allow us to compare values and yield the result. In this video we'll be looking at equal and identical comparisons. Equal compares ONLY the values while identical compares the values and type. We'll also consider type juggling in PHP.
	*/

	// var_dump(1 + "2");

	$a = 10;
	$b = '10';

	// var_dump($a == $b);
	// var_dump($a === $b); // will be false because they are not the same type

	// var_dump($string_one == 'Learning to display "Hello Alena!" to the screen.');
	$string_one = '';
	if ($string_one == 'Learning to display "Hello Alena!" to the screen.') {
		echo 'the values match';
	} elseif ($string_one == '') {
		echo '$string_one is empty';
	} else {
		echo 'the values DO NOT match';
	}

?>