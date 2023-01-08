<?php
	include_once '../includes/connect.php';
	session_start();
	$error="";
	$error1="";
	
	
	if(!empty($_POST['submit'])){
		$user=$_POST['user'];
		$pass=$_POST['pass'];
		$usertype=$_POST['usertype'];
		$query="SELECT * FROM password_table WHERE Username='$user' AND Password='$pass' AND usertype='$usertype'";
		$result=mysqli_query($conn,$query);
		$count=mysqli_num_rows($result);
		if($count>0){
			$usertype=$_POST['usertype'];
			$users=mysqli_fetch_assoc($result);
			$_SESSION['loggedin']=1;
			$_SESSION['usertype']=$users['usertype'];
			
			if($usertype=="admin"){
				header("Location:../php/admin_homepage.php?signup=success");
				$_SESSION['admin']=1;}
				
			else{
				header("Location:../php/user_homepage.php?signup=success");
			}
			
		}
		else{
			$error="*Inavlid Username,Password or Account Type";
		}
	}
	
		$error1="*You must be logged in to access that page";
	
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
</head>
<link rel="stylesheet" href="../css/login.css">
<body>
	<div class="center">
		<img src="../images/login.png" class="avatar">
	</div>
	<div id="main">
		<center><h2>Login Form</h2></center>
		<div class="er" id="er1"><?php echo "$error1"; ?><br></div>

	
	<form class="myform" action="login.php"  method="post">
		<label><b>Account type:</b></label>
		<select name ="usertype">
			<option value="user">User</option>
			<option value="admin" selected>Admin</option>
		</select><br><br> 
		<label><b>Username</b></label><br>
		<input type="text" name="user" class="input" placeholder="type your username"/><br><br>
		<label><b>Password</b></label><br>
		<input type="password" name="pass" class="input" placeholder="type your password"/><br><br>
		<div class="er" id="er1"><?php echo "$error"; ?><br></div>
		<input type="submit" name="submit" id="login_btn" value="Login"/><br>
		<label><b>Create an account?</b></label>
		<input type="button" id="register_btn" value="Sign Up" onclick="location.href='register.php'" /><br>
	</form>
	</div>
</body>
</html>