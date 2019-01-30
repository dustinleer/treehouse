<?php

	/* PHP Array functions documentation
	 * http://php.net/manual/en/ref.array.php
	 * read this to learn more about array functions
	*/

	$learn = array( 'Conditonals', 'Arrays', 'Loops' );
	
	// Adds an element to the end of an array
	$learn[] = 'Build something awesome!';

	// $learn = 'Build something awesome!';
	/* !!! this will override the entire array !!! */

	// Adds multiple elements to the end of an array
	array_push( $learn, 'Functions', 'Forms', 'Objects' );

	// Adds multiple elements to the beginning of an array
	array_unshift( $learn, 'HTML', 'CSS' );

	// Shifts an element off the beginning of array.
	// http://php.net/manual/en/function.array-shift.php
	echo 'you removed ' . array_shift( $learn );

	// Pops the element off the end of array
	echo 'you removed ' . array_pop( $learn );

	// Unset a given variable (works on more than array values, but does not update array keys
	unset( $learn[1], $learn[2] );

	// Reindexing array keys with the array_values function
	$learn = array_values( $learn );

	// unset($array); will remove your entire array.
	unset( $learn );

	var_dump( $learn );
	// echo $learn[1];
	// echo $learn;
	// echo implode("\n", $learn);
?>