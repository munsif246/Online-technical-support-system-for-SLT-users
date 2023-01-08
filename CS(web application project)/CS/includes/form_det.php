<?php
	
	include_once 'connect.php';
	$name=$_POST['name'];
	$conatact=$_POST['contact'];
	$email=$_POST['email'];
	$customer_id=$_POST['customer_id'];
	$issue=$_POST['issue'];
	$connectionyear=$_POST['connectionyear'];
	$connection=$_POST['connection'];

	$sql="INSERT INTO customer_info(Customer_ID, Name, Contact_No,Email,Issue,Connection,Date) 
		VALUES ('$customer_id','$name','$conatact','$email','$issue','$connection','$connectionyear')";
	mysqli_query($conn,$sql);
	header("Location:../php/form.php?signup=success");
?>

