<?php 
include "navbar2.php";
include 'database.php';
if(!isset($_GET['user'])){
	
	header('location:customers.php');
}
$user=$_GET['user'];
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	 <style type="text/css">
	 table{
            width: 60%;
        }
        </style>
</head>
<body>
	<center>
		<div>
			<img src="icon.png" width="200px">
			<table>
				<?php  

				$fetchcustomers=mysqli_query($database,"select * from customers where customername='$user'");
				$customer=mysqli_fetch_assoc($fetchcustomers);

				echo '<tr><td>Customer Name:</td><td>'.$customer['customername'].'</td></tr>';
				echo '<tr><td>Email:</td><td>'.$customer['email'].'</td></tr>';
				echo '<tr><td>Account Number:</td><td>'.$customer['accountno'].'</td></tr>';
				echo '<tr><td>Bank balance:</td><td>'.$customer['bankbalance'].'</td></tr>';

				echo '<tr><td colspan="2" align="center"><button class="button button1"><a href="transfer.php?user='.$user.'">Send money</a></button></tr></td>';
				?>




			</table>
		</div>

	</center>
</body>
</html>