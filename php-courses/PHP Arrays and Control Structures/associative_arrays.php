<?php

	$iceCream = array(
		'Alena' => 'Black Cherry',
		'Treasure' => 'Chocolate',
		'Dave McFarland' => 'Cookies and Cream',
		'Rialla' => 'Strawberry'
	);

	// echo $iceCream['Alena'];
	
	/*
	 * Array Keys
		 * Are case sensitive.
		
		 * Must be unique or they will be overwritten.
		
		 * Can either be an integer or a string. (The value can be of any type.)
		
		 * Can be a combination of integers and strings. Note: ksort will NOT work if numeric and string keys are mixed together.
		
	 * Key Casting
		 * Strings containing valid integers will be cast to the integer type. E.g. the key "8" will actually be stored under 8. On the other hand "08" will not be cast, as it isn't a valid decimal integer.
		
		 *  Floats are also cast to integers, which means that the fractional part will be truncated. E.g. the key 8.7 will actually be stored under 8.
		
		 * Bools are cast to integers, too, i.e. the key true will actually be stored under 1 and the key false under 0.
		
		 * Null will be cast to the empty string, i.e. the key null will actually be stored under "".
		
		 * Arrays and objects can not be used as keys. Doing so will result in a warning: Illegal offset type.
		
		 * If multiple elements in the array declaration use the same key, only the last one will be used as all others are overwritten.
	*/

	// Array Keys are case sensitive
	$iceCream['alena'] = 'Pistachio';
	$iceCream['Dave Thomas'] = 'Cookies and Cream';
	// $iceCream[] = 'Vanilla';
	$iceCream['Andrew'] = true;
	krsort( $iceCream );
	asort( $iceCream );
	var_dump( $iceCream );

	/* Sorting
	 * PHP has several functions that deal with Sorting Arrays (http://php.net/manual/en/array.sorting.php). The main differences are:

     	* Some sort based on the array keys, whereas others by the values: $array['key'] = 'value';
	
		* Whether or not the correlation between the keys and values are maintained after the sort, which may mean the keys are reset numerically (0,1,2 ...)
	
		* The order of the sort: alphabetical, low to high (ascending), high to low (descending), numerical, natural, random, or user defined
	
		* Note: All of these sort functions act directly on the array variable itself, as opposed to returning a new sorted array
	
		* If any of these sort functions evaluates two members as equal then the order is undefined (the sorting is not stable).

		* Note that ksort will NOT work if numeric and string keys are mixed together, so let's comment out this line adding vanilla.

	*/ 

	$keys = array(
		1 	 => 'a',
		'1'  => 'b',
		1.5  => 'c',
		true => 'd'
	);

	// var_dump( $keys );
?>