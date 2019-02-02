<?php

	// Creating the function
	// function hello() {
	// 	echo 'Hello, World';
	// }

	// Call the function
	// hello();


	$current_user = 'Mike';

	function is_mike() {
		global $current_user;
		if ( $current_user == 'Mike' ) {
			echo 'It is Mike!';
		} else {
			echo 'Nope, it is not Mike.';
		}
	}
	is_mike();

	
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

	function get_info( $name, $title = Null ) {
		if ( $title ) {
			echo "$name has arrived, the are with us as a $title";
		} else {
			echo "$name has arrived, welcome!";
		}
	}
	get_info('Mike', 'frog');

	function hello( $name ) {
		if ( $name == 'Mike' ) {
			return 'Hello, Mike!';
		} else {
			return 'Hello, stranger.';
		}
	}
	$greeting = hello( 'Mike' );

	echo $greeting;

?>