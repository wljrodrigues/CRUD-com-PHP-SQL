<?php
	
	include "connection.php";
	$stu_name = $_POST['sname'];
	$stu_address = $_POST['saddress'];
	$stu_class = $_POST['sclass'];
	$stu_phone = $_POST['sphone'];
	
	
	
	$sql="INSERT INTO student(sname, saddress, sclass, sphone) VALUES ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";
	$result = mysqli_query($conn,$sql) or die ("query unsuccessful.");
	
	header("Location: index.php");
	
	mysqli_close($conn);
?>