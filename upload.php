<?php
	$temp_file = $_FILES["file1"]["tmp_name"];
	$file_name = basename($_FILES["file1"]["name"]);
	$target_file   = "uploads/" . $file_name;

	if ( move_uploaded_file( $temp_file, $target_file ) ) {
		echo "The file " . $file_name . " has been uploaded.";
	} else {
		echo "Sorry, there was an error uploading your file.";
	}
?>

<?php
	echo '<br><br><br>';
	echo "\$_FILES";
	var_dump( $_FILES ); // or var_dump($_FILES) for more detailed output
?>
