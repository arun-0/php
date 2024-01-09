<?php
//	session_start();
//	$_SESSION["fav_subject"] ="PHP";
//	echo "session created\n";
//	// to print the session
//	print_r($_SESSION);

	echo "Pattern 1<br>";
	for ( $i = 1; $i <= 4; $i ++ ) {
		for ( $j = 1; $j <= $i; $j ++ ) {
			echo $j;
		}
		echo "<br>";
	}

	echo "<br>Pattern 2<br>";
	for ( $i = 1; $i <= 4; $i ++ ) {
		for ( $j = 1; $j <= $i; $j ++ ) {
			echo $i;
		}
		echo "<br>";
	}

	echo "<br>Pattern 3<br>";
	for ( $i = 4; $i >= 1; $i -- ) {
		for ( $j = 1; $j <= $i; $j ++ ) {
			echo $j;
		}
		echo "<br>";
	}

?>