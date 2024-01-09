<?php
	// Setting a cookie
	$cookie_name  = "user";
	$cookie_value = "John Doe";
	setcookie( $cookie_name, $cookie_value, time() + ( 3600 ), "/" ); // 3600 = 1hr, 86400 = 1 day
	echo "Cookie <b>'user'</b> been set to value <b>'John Doe'</b>"
?>