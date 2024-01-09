<?php
	// Set the cookie to expire
	$cookie_name = "user";
	unset( $_COOKIE[ $cookie_name ] );
	// Expire the cookie by setting its expiration time to a past value
	setcookie( $cookie_name, "", time() - 3600, '/' );
	echo "Cookie named <b>'user'</b> has been deleted"
?>