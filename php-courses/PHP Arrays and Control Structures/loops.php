<?php

	$currentYear = date( 'Y' );
	$year = $currentYear - 100;

	// while ( ++$year <= $currentYear ) {
	// 	echo $year . "<br /> \n";
	// }

	do {
		echo $year . "<br /> \n";
	} while ( ++$year <= $currentYear );

?>