<?php
	include_once '../includes/connect.php';
	$error1="";
	if(!empty($_POST['submit'])){
		$username1=$_POST['username'];
		
		$query="SELECT * FROM password_table WHERE Username='$username1'";
		$result=mysqli_query($conn,$query);
		$count=mysqli_num_rows($result);
			if($count>0){
				$error1="Username has already been taken";
			}else{
				$username=$_POST['username'];
				$password=$_POST['password'];
				$usertype=$_POST['usertype'];
				$sql="INSERT INTO password_table(Username,Password,usertype) VALUES ('$username','$password','$usertype')";
				mysqli_query($conn,$sql);
				header("Location:../php/login.php?signup=success");}
	}
	
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
</head>
<link rel="stylesheet" href="../css/login.css">
<script src="../js/script.js"></script>

<body>
	<div class="center">
		<img src="../images/login.png" class="avatar">
	</div>
	<div id="main">
		<center><h2>Sign Up Form</h2></center>
	
	<form class="myform" action="register.php" method="post" name="form1">
		<label><b>Account type:</b></label>
		<select name ="usertype">
			<option>User</option>
			<option selected>Admin</option>
		</select><br><br>
		<label><b>Username</b></label><br>
		<input name="username" id="uname" type="text" class="input" placeholder="type your username" required/><br><br>
		<label><b>Password</b></label><br>
		<input name="password" id="pwd" type="password" class="input" placeholder="type your password" required/><br><br>
		<label><b>Confirm Password</b></label><br>
		<input name="conpassword" id="cpwd" type="password" class="input" placeholder="confirm your password" required/><br><br>
		<div class="er" id="er1"></div>
		<div class="er2" id="er2"><?php echo "$error1"; ?></div>
		<input name="submit" type="submit" id="signup" value="Sign Up" onclick="return empty()"/><br>
		<label><b>Already have an account?</b></label><br>
		<input type="button" id="back" value="Login" onclick="location.href='login.php'"/><br>
		
	</form>

	</div>
</body>
</html>