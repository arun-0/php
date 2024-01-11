<?php
	$name = $_REQUEST['name'];
	$mob = $_REQUEST['mobile'];

	$con = mysqli_connect('localhost','root','Jaysiyaram1!','demo1');
	$res = mysqli_query($con, "INSERT INTO `students`(`stud_name`, `stud_mob`) VALUES ('$name', '$mob')");

	header("Location:read.php");
?>