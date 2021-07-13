<?php 
include "navbar2.php";
include "database.php";

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Transactions</title>
       <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>
 	<center>

 	<h1 style="color:#cc99ff ;">Transaction details</h1>
 	<table>
        <th>Transaction id</th>
 		<th>Sender</th>
 		<th>Receiver</th>
 		<th>Date</th>
 		<th>Amount</th>
 		<th></th>
 		<?php
 				$fetchtransactions = mysqli_query($database,"Select * from transfers");

 				while ($customer = mysqli_fetch_assoc($fetchtransactions))
 				 {
 					echo '<tr><td>'.$customer['transactionid'].'</td><td>'.$customer['sender'].'</td><td>'.$customer['receiver'].'</td><td>'.$customer['date'].'</td><td>'.$customer['amount'].'</td></tr>';
 				}





 		?>
 	</table>

 	</center>
 
 </body>
 </html>