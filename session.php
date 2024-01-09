<?php
	echo "\$_SESSION";
	var_dump( $_SESSION ); // or var_dump($_FILES) for more detailed output

	session_start();
	echo "\$_SESSION";
	var_dump( $_SESSION ); // or var_dump($_FILES) for more detailed output
	echo '<br><br>';

?>