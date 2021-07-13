<?php 
include "database.php";
include "navbar2.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Make Transactions</title>
	<link rel="stylesheet" type="text/css" href="formstyles.css">
</head>
<body>
	<center>
	<h1 style="color:#cc99ff ;">Make Transactions</h1>
	<form name="form" method="post" onsubmit="return validate();" action="maketransback.php" autocomplete="off">
		<input type="text" name="a" placeholder="Enter Sender account number">
		<input type="text" name="b" placeholder="Enter Receiver account number">
		<input type="text" name="c" placeholder="Enter amount (in rupees)"><br>
		<input type="submit" value ="Send">
		</form>
	</center>


</body>
</html>