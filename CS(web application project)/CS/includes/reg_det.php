<?php
	
	include_once 'connect.php';
	$username1=$_POST['username'];
	$error="";
	$query="SELECT * FROM password_table WHERE Username='$username1'";
	$result=mysqli_query($conn,$query);
	$count=mysqli_num_rows($result);
		if($count>0){
			$error="Username already Exists";
		}else{
			$username=$_POST['username'];
			$password=$_POST['password'];
			$sql="INSERT INTO password_table(Username,Password) VALUES ('$username','$password')";
			mysqli_query($conn,$sql);
			header("Location:../php/login.php?signup=success");}
	
	
	
		
		
	
?>