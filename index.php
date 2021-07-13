<?php

include "navbar.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Bank of Sparks</title>
	<style type="text/css">

	#background{
		background-image: url(bank.jpg);
		width: 100vw;
		height: 100vh;
		background-size: 100% 100%;
		background-repeat: no-repeat;
		position: relative;
		}

	button{
		background-color: #d9b3ff;
		color: black;
		padding: 16px 30px;
		text-align: center;
		text-decoration: blink;
		display: inline-block;
		font-size: 15px;
		font-weight: bold;
		font-family: 'Lora', serif;
	}
	button a:hover{
		box-shadow: 0 16px 30px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	}

	body{
		font-family: 'Lora', serif;
		overflow-y: hidden;
	}
	
	</style>
	
</head>

<body>
	<div id ="background">
	<center>
		<br>
		<br>
		<br>
	<button><a href="transactions.php">View transactions</a></button>&ensp;&ensp;&ensp;
	<button><a href="maketransactions.php">Make Transactions</a></button>&ensp;&ensp;&ensp;
	<button><a href="customers.php">View Customers</a></button>
	</center>
	</div>

</body>
</html>
