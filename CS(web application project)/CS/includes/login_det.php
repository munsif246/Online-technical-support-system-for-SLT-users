<?php
	include_once 'connect.php';
	if(!empty($_POST['submit'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$query="SELECT * FROM password_table WHERE Username='$user' AND Password='$pass'";
		$result=mysqli_query($conn,$query);
		$count=mysqli_num_rows($result);
		if($count>0){
			header("Location:../php/homepage(3).php?signup=success");
		}
		else{
			$error="Inavlid Username or Password";
		}
	}
?>