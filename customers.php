<?php 

include "database.php";
include "navbar2.php";

?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Customer Details</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css">
        table{
            width: 80%;
        }
    </style>
 </head>
 <body>
 	<center>
    <div id="background"></div>

 	<h1 style="color:#cc99ff ;">Customer details</h1>
 	<table>
 		<th>Account number</th>
 		<th>Customer Name</th>
 		 <th>Email</th> 
 		<th>Balance</th>
 		<th></th>
 		<?php
 				$fetchcustomers = mysqli_query($database,"Select * from customers");

 				while ($customer = mysqli_fetch_assoc($fetchcustomers))
 				 {
 					echo '<tr> 
                    <td>'.$customer['accountno'].'</td> 
                    <td>'.$customer['customername'].'</td> 
                    <td>'.$customer['email'].'</td> 
                    <td>'.$customer['bankbalance'].'</td> 
                    <td><button class="button button1"><a href="profile.php?user='.$customer['customername'].'">View Profile</a></button></td>
                    </tr>';
 				}





 		?>
 	</table>

 	</center>
 
 </body>
 </html>