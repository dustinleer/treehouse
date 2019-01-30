<?php
	$a = 0;
	$b = 5;

	// Examples of negation
	// NUMBER 1
	// if ( $a == $b ) {
	// 	echo 'values are equal';
	// } else {
	// 	echo 'values are NOT equal';
	// }

	/* Example of NUMBER 1
	 * This can be written like this thought it can be confusing and adds extra code that we do not need 😢
	*/
	/*
	if ( $a == $b ) {
	} else {
		echo 'values are NOT equal';
	}
	*/

	/* Example of NUMBER 1
	 * This can be written like this, thought it's still pretty complicated 😢
	*/
	/*
	if (( $a == $b ) == false) {
		echo 'values are NOT equal';
	}
	*/

	// Less than or greater than
	// if ( $a <> $b ) {
	// 	echo 'values are NOT equal';
	// }


	// Negation Operator
	// if ( $a != $b ) {
	// 	echo 'values are NOT equal';
	// }

	// Not identical
	// if ( $a !== $b ) {
	// 	echo 'NOT identical';
	// }

	// if ( $a ) {
	// 	echo 'true';
	// }

	// if ( !$a ) {
	// 	echo 'false';
	// }

	// if ( $a == false ) {
	// 	echo 'false';
	// }

	// if ( $a != true ) {
	// 	echo 'false';
	// }

	// if ( $a == $b ) {
	// 	echo ' values are equal ';
	// } else if ( $a < $b ) {
	// 	echo ' $a is less than $b ';
	// } else if ( $a > $b ) {
	// 	echo ' $a is greater than $b ';
	// } else {
	// 	echo ' values are not equal ';
	// }

	// $score = 20;

	// if ( $score >= 60 ) {
	// 	echo 'You completed the level!';
	// } else if ( $score <= 30 ) {
	// 	echo 'You should practice some more before trying this level again.';
	// } else {
	// 	echo 'Please try again';
	// }

	// $num = 1;
	// if ( $num >= 10 ) {
	// 	if ( $num <= 1000 ) {
	// 		echo 'your number is within the range';
	// 	} else {
	// 		echo 'your number is great than 1000, NOT within the range';
	// 	}
	// } else {
	// 	echo ' your number is less than 10, NOT within the range';
	// }


	// $num = 10000;
	// if ( $num >= 10 && $num <= 1000 ) {
	// 	echo 'your number is within the range';
	// } else {
	// 	echo ' your number is NOT within the range';
	// }


	// $num = 20;
	// if ( $num == 10 || is_string($num) ) {
	// 	echo '10 or string';
	// } else {
	// 	echo ' NOT 10 or string';
	// }
	
	$var1 = true && false; // Evalutes to $var1 = (true && false);
	$var2 = true and false; // Evaluated to ($var2 = true) and false;

	var_dump($var1, $var2);

?>
