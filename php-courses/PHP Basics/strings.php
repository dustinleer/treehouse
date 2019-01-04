<?php

	/* Escape Sequence Example */
	$name = 'Alena';
	$string_one = "Learning to display \"Hello $name!\" to the screen.\n";
	
	/* Combining Strings with concatentation */
	$string_one = 'Learning to display ';
	$string_one .= '"Hello ';
	$string_one .= $name;
	$string_one .= '!" to the screen.';
	$string_one = $string_one . "\n";
	// Prepend to a string
	$string_one = 'I am ' . $string_one;
	echo $string_one;

	/* Concatentaion
	Use		When				Example
	""		Single variable		$myString = "Adding single variable $string to this string.";

	.		Single line			$myString = 'Combining multiple' . $strings . 'on one line.";

	.=		Multiple lines		$myString = 'Combining multiple lines';
								$myString .= $strings;
								$myString .= 'by using the assignment operator';
	*/

	//Place your code below this comment
	$firstName = 'Rasmus';
	$lastName = 'Lerdorf';
	// $fullName = $firstName . ' ' . $lastName . "\n"; this also did not work
	$fullName = $firstName . ' ' . $lastName;

	// echo $fullName . "\n"; this did not work
	echo $fullName . " was the original creator of PHP.\n";
?>