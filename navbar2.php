<?php 

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<style type="text/css">
		ul{
			list-style-type: none;
			margin: 0;
			padding: 20px;
			overflow: hidden;
			background-color: #e600e6;
			top: 0;
			width: 100%;

		}
		li{
			float: left;
			

		}

		li a{
			display: block;
			padding: 10px;
			color: white;
			text-align: center;
			padding: 16px 18px;
			text-decoration: none;
			
		}

		a.nav:hover{
			background-color: #26004d;
		}
		.main{
			font-weight: bold;
			font-size: 25px;
			font-style: oblique;

		}

		.nav{
			font-size: 20px;

		}
		a.main:hover{
			color: #26004d;
			font-size: 200%;

		}

		body{
			font-family: 'Lora', serif;
		}




	</style>
</head>
<body>
<ul>
	<li><a class="main" href="index.php">Bank of Sparks</a></li>
	<li><a class="nav" href="#maketransactions">Make Transactions</a></li>
	<li><a class="nav" href="transactions.php">View Transactions</a></li>
	<li><a class="nav" href="customers.php">View Customers</a></li>
</ul>

</body>
</html>