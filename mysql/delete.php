<?php
	$con = mysqli_connect('localhost','root','Jaysiyaram1!','demo1');
	$id = $_REQUEST['id'];

	$res = mysqli_query($con,"DELETE FROM `students` WHERE `students`.`stud_id` ='$id' ");

	header("Location:read.php");
?>