<?php

	// Creating the function
	// function hello() {
	// 	echo 'Hello, World';
	// }

	// Call the function
	// hello();


	// $current_user = 'Mike';

	// function is_mike() {
	// 	global $current_user;
	// 	if ( $current_user == 'Mike' ) {
	// 		echo 'It is Mike!';
	// 	} else {
	// 		echo 'Nope, it is not Mike.';
	// 	}
	// }
	// is_mike();

	
	// function hello( $arr ) {
	// 	if (is_array( $arr )) {
	// 		foreach ( $arr as $name ) {
	// 			echo "Hello, $name, how's it going!</br>";
	// 		}
	// 	} else {
	// 		'Hello, friends';
	// 	}
	// }
	// $names = array(
	// 	'Hampton',
	// 	'Mike',
	// 	'Charley',
	// );
	// hello($names);

	// function get_info( $name, $title = Null ) {
	// 	if ( $title ) {
	// 		echo "$name has arrived, the are with us as a $title";
	// 	} else {
	// 		echo "$name has arrived, welcome!";
	// 	}
	// }
	// get_info('Mike', 'frog');

	// function hello( $name ) {
	// 	if ( $name == 'Mike' ) {
	// 		return 'Hello, Mike!';
	// 	} else {
	// 		return 'Hello, stranger.';
	// 	}
	// }
	// $greeting = hello( 'Mike' );

	// echo $greeting;


	// Returning Integers
	// function add_up( $a, $b ) {
	// 	$arr = array(
	// 		$a,
	// 		$b,
	// 		$a + $b,
	// 	);
	// 	return $arr;
	// }
	// $value = add_up( 2, 4 );

	// // print_r( $value );
	// echo $value[2];


	// PHP Variable Functions
	// function answer() {
	// 	return 42;
	// }

	// function add_up( $a, $b ) {
	// 	return $a + $b;
	// }

	// $func = 'add_up';
	// $num = $func( 5, 10 );
	// echo $num;


	// PHP Closures
	// $name = 'Mike';

	// $greet = function() use( $name ){
	// 	echo "Hello, $name!";
	// };

	// $greet();


	/* PHP Functions
	 *  PHP String Functions
	*/

	$phrase = "We only hit what we aim for";

	$len = strlen( $phrase );
	// echo $len;

	// Substring
	// echo substr( $phrase, 0, 5 );


	// String Position
	// echo strpos( $phrase, 'hit' );
	// Will return false if 'string' is not found.

	$start = strpos( $phrase, 'hit' );
	// echo substr( $phrase, $start );


	/* PHP Functions
	 *  PHP Array Functions
	*/

	// array_keys
	$names = array(
		'Mike' => 'Frog',
		'Chris' => 'Teacher',
		'Hampton' => 'Teacher',
	);

	// foreach (array_keys( $names ) as $name) {
	// 	echo "Hello, $name <br>";
	// };


	// array_walk
	
	function print_info( $value, $key ) {
		echo "$key is a $value.<br>";
	}
	
	array_walk( $names, 'print_info' );

?>