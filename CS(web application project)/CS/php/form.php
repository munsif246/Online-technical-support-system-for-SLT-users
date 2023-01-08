
<?php
	include_once '../includes/connect.php';
	session_start();
	
	if($_SESSION['loggedin']!=1){
    header('Location: login.php');}
	
?>




<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
<link rel="stylesheet" type="text/css" href="../css/form.css">
</head>
<body>
<div class="top">
	<img src="../images/SLTLogo.png" width="70px" height="70px">
	<span><font size="30" color="white"><b><center>One Country-One Voice</center></font></b></span>
</div>
<div class="top2">
	
	<span><font size="4" color="white">Home > Issues</span>
</div>
<div class="form">
	<form action="../includes/form_det.php" method="post">
		<table>
			<tr>
				<td><b>Full Name:</b></td>
				<td><INPUT TYPE="text" NAME="name" SIZE="40" placeholder="name" required></td>
			</tr>
			<tr>
				<td><b>Contact Number:</b></td>
				<td><INPUT TYPE="text" NAME="contact" SIZE="40" placeholder="contact number" required></td>
			</tr>
			<tr>
				<td><b>Email:</b></td>
				<td><INPUT TYPE="text" NAME="email" SIZE="40" placeholder="email" required></td>
			</tr>
			<tr>
				<td><b>Customer ID</b></td>
				<td><INPUT TYPE="text" name="customer_id" SIZE="40" placeholder="Customer ID" required></td>
			</tr>
			<tr>
				<td><b>Date Of Connection Establishment:</b></td>
				<td><INPUT TYPE="text" name="connectionyear" SIZE="40" placeholder="DD/MM/YYYY" required></td>
			<tr>
				<td><b>Connection:</b></td>
				<td><select name ="connection">
					<option> Broadband</option>
					<option> 4G</option>
					<option selected>peo TV</option>
				</select></td>
			</tr>
			<tr>
				<td><b>Issue:</b></td>
				<td><TEXTAREA NAME="issue" ROWS="5" COLS="40" placeholder="issue"></TEXTAREA></td>
			</tr>
			<tr>
				<td colspan="2">
					<center>
					<INPUT TYPE="SUBMIT" name="submit" VALUE="submit">
					<INPUT TYPE="RESET" VALUE="cancel">
					</center>
		</table>
	</form>
</div>
<div class="bottom">
	<center><style="padding-top:2px">@Sri Lanka Telecom PLC All Rights Reserved.</style></center>
</div>



</body>
</html>