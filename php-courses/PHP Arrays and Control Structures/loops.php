<?php

	// for ( $year = date('Y') - 99; $year <= date('Y'); $year++ ) { 
	// 	echo $year . "<br /> \n";
	// }

	// while ( ++$year <= $currentYear ) {
	// 	echo $year . "<br /> \n";
	// }

	// do {
	// 	echo $year . "<br /> \n";
	// } while ( ++$year <= $currentYear );

	$learn = array( 'Conditonals', 'Arrays', 'Loops' );
	$learn[] = 'Build something awesome!';
	array_push( $learn, 'Functions', 'Forms', 'Objects' );
	array_unshift( $learn, 'HTML', 'CSS' );
	asort( $learn );

	for ( $i = 0; $i < count( $learn ); $i++ ) {
		echo $learn[$i] . "\n";
	}

	$count = 0;
	// while ((list( $key, $val ) = each( $learn )) && $count++ < 2) {
	// 	echo "$key => $val \n";
	// }

	/* PHP Arrays and Control Structures
		* Create a FOR loop that displays each number from 1 to 100.
		* Make sure that you DO NOT show 0 and you DO show 100.
	*/
	$facts = array(
		57 => ' on Heinz ketchup bottles represents the number of varieties of pickles the company once had.',
		2 => ' is the approximate hours a day Giraffes sleeps',
		18 => ' is the average hours a Python sleeps per day',
		10 => ' per cent of the world is left-handed.',
		11 => ' Empire State Buildings, stacked one on top of the other, would be required to measure the Gulf of Mexico at its deepest point.',
		98 => '% of the atoms in your body are replaced every year',
		69 => ' is the largest number of recorded children born to one woman',
	);

	for ( $i = 1; $i <= 100; $i++ ) {
		if ( isset( $facts[$i] ) ) {
			echo $i . $facts[$i] . "\n";
		}
	}


?>