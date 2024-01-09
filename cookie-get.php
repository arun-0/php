<?php
	// Getting a cookie
	$cookie_name = "user";
	if ( isset( $_COOKIE[ $cookie_name ] ) ) {
		echo "Cookie '" . $cookie_name . "' is present!<br>";
		echo "Value is: " . $_COOKIE[ $cookie_name ];
	} else {
		echo "Cookie named '" . $cookie_name . "' is not present";
	}

?>