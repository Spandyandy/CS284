<?php
	$myLittleArray = array(-22, 31, "Jan", "Tuesday", 3.14);
	for ($i = 0; $i < 5; $i++){
		print '$myLittleArray = ';
		echo "$myLittleArray[$i]<br>";
	}
	print_r( $myLittleArray );
?>