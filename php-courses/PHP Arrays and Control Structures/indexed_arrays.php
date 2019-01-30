<?php

	$learn = array( 'Conditonals', 'Arrays', 'Loops' );
	
	// Adds an element to the end of an array
	$learn[] = 'Build something awesome!';

	// $learn = 'Build something awesome!';
	/* !!! this will override the entire array !!! */

	// Adds multiple elements to the end of an array
	array_push( $learn, 'Functions', 'Forms', 'Objects' );

	// Adds multiple elements to the beginning of an array
	array_unshift( $learn, 'HTML', 'CSS' );

	/* PHP Array functions documentation
	 * http://php.net/manual/en/ref.array.php
	 * read this to learn more about array functions
	*/

	var_dump( $learn );
	// echo $learn[1];
	// echo $learn;
	// echo implode("\n", $learn);
?>