<?php
	include_once '../includes/connect.php';
	if(isset($_POST['delete'])){
		$id=$_POST['id'];
		$sql="DELETE FROM customer_info WHERE Customer_ID='$id'";
		$res=mysqli_query($conn,$sql);
	}
	
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>Issues</title>
<link rel="stylesheet" type="text/css" href="../css/problem.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<script src="../js/problem.js"></script>
</head>
<body>


<h1><font color="white"> Customer Problems</font></h1>
	
<div class="back1">
	<table border=1>
		<thead>
			<tr>
				<th>Customer_ID</th>
				<th>Name</th>
				<th>contact.No</th>
				<th>Email</th>
				<th class="issue">Problems</th>
				<th>Connection</th>
				<th>Date</th>
				<th colspan=2>Operation</th>
			</tr>
		<tbody>
			<?php
				include_once '../includes/connect.php';
				$query="SELECT * FROM customer_info;";
				$result=mysqli_query($conn,$query);
				$count=mysqli_num_rows($result);
				$res=mysqli_fetch_array($result);
				while($res=mysqli_fetch_array($result)){
				?>
					<tr>
						<td><?php echo $res['Customer_ID'] ?></td>
						<td><?php echo $res['Name'] ?></td>
						<td><?php echo $res['Contact_No'] ?></td>
						<td><?php echo $res['Email'] ?></td>
						<td class="issue1"><?php echo $res['Issue'] ?></td>
						<td><?php echo $res['Connection'] ?></td>
						<td><?php echo $res['Date'] ?></td>
						<td><button name="reply" style="font-size:15px ;color:red" onclick="location.href='mailto:<?php echo $res['Email'] ?>'"> Mail <i class="fa fa-envelope"></i></button> </td>
						<td><form method="post" action=""><input type="hidden" name="id" value="<?php echo $res['Customer_ID']?>"><input type="submit" class="btn btn-sm btn danger" name="delete" value="delete"></form></td>

				
					</tr>
					<?php
					}
					?>
			
			
</div>	
	
</body>
</html>
