<!DOCTYPE html>
<html>
<head>
	<title>New Customers</title>
<link rel="stylesheet" type="text/css" href="../css/problem.css">


<script src="../js/problem.js"></script>
</head>
<body>


<h1><font color="white"> Customer Problems</font></h1>
	
<div class="back1">
	<table border=1>
		<thead>
			<tr>
				<th>Username</th>
				<th>Password</th>
				<th>User type</th>
				<t
			</tr>
		<tbody>
			<?php
				include_once '../includes/connect.php';
				$query="SELECT * FROM password_table;";
				$result=mysqli_query($conn,$query);
				$count=mysqli_num_rows($result);
				$res=mysqli_fetch_array($result);
				while($res=mysqli_fetch_array($result)){
				?>
					<tr>
						<td><?php echo $res['Username'] ?></td>
						<td><?php echo $res['Password'] ?></td>
						<td><?php echo $res['usertype'] ?></td>
						

				
					</tr>
					<?php
					}
					?>
			
			
</div>	
	
</body>
</html>
