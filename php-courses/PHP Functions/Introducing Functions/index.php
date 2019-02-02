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

	
	function hello( $arr ) {
		if (is_array( $arr )) {
			foreach ( $arr as $name ) {
				echo "Hello, $name, how's it going!</br>";
			}
		} else {
			'Hello, friends';
		}
	}
	$names = array(
		'Hampton',
		'Mike',
		'Charley',
	);
	hello($names);

?>