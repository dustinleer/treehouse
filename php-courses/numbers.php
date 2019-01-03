<?php
	$num_one = 1;
	$num_two = 2;
	$num_three = 3;

	/* Integers
	 * 
	 * This section went over variables and integers 
	 * 
	*/

	// echo $num_one;
	// echo 1;
	// echo "1";

	// How do we tell if something is an integer? With the 'var_dump()' function
	// var_dump($num_one);
	// var_dump(1);
	// var_dump("1");
	// var_dump($num_one + $num_two - $num_three);

	/* Floats
	 * 
	 * Working with Floats
	 * 
	*/
	$distance_home = 1.2;
	$distance_work = 2.5;

	var_dump($distance_home + $distance_work + $num_three + .3);

	/* Operators
	 * 
	 * This section covers other operators in PHP
	 * 
	*/
	$a = 5;
	$b = 10;

	// Multiply
	var_dump($a * $b);

	// Quotient
	var_dump($a / $b);

	// Incrementing and Decrementing Operators
	$a = $a + 1;
	var_dump($a);
	$a++;
	var_dump($a);
	$a--;
	var_dump($a);
	var_dump($a--);
	var_dump($a);
	var_dump(--$a);
	var_dump($a);

	// Combined Operators
	$a = $a + 5;
	var_dump($a);

	$a += 5;
	var_dump($a);

?>