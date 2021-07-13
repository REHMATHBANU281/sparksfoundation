<?php 
include "database.php";
$sender = $_POST['a'];
$receiver = $_POST['b'];
$money = $_POST['c'];
$fetch1=mysqli_query($database,"select *from customers where customername='$sender' ");
$sent = mysqli_fetch_assoc($fetch1);
if(mysqli_num_rows($fetch1)==0){
	echo "Sender not found";
	echo '<a href="maketransactions.php">Go back</a>';
}

$fetch2 = mysqli_query($database,"select *from customers where customername='$receiver' ");
//$received = mysqli_fetch_assoc($fetch2);
if(mysqli_num_rows($fetch2)==0){
	echo "Receiver not found";
	echo '<a href="maketransactions.php">Go back</a>';
}
$balance = $sent['bankbalance'];
if($balance<$money){
	echo "insufficient balance";
}

else
{
	
	$id =uniqid();
	$date = date('Y-m-d H:i:s'); 
	$insert = mysqli_query($database,"insert into transfers values('$sender','$receiver','$date','$money','$id')");
	if($insert)
	{
		$deduct = mysqli_query($database,"update customers set bankbalance=bankbalance-$money where customername='$sender' ");
		$credit = mysqli_query($database,"update customers set bankbalance=bankbalance+$money where customername='$receiver'");

		if($deduct && $credit)
		{
			header('location:transactions.php');
		}
	}
}
?>
