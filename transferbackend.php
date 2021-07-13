<?php 
include 'database.php';
$accno =  $_POST['a'];
$money = $_POST['b'];
$sender = $_POST['d'];
$fetch=mysqli_query($database,"select * from customers where customername='$sender' ");
$customer=mysqli_fetch_assoc($fetch);
$mybalance=$customer['bankbalance'];
if($mybalance<$money)
{
	echo "insufficient balance";
	echo '<a href="transfer.php?user='.$sender.'">Go back</a>';
}

$fetchaccount =  mysqli_query($database,"select * from customers where accountno='$accno' ");
if(mysqli_num_rows($fetchaccount)==0)
{
	echo "Account not found";
	echo '<a href="transfer.php?user='.$sender.'">Go back</a>';
}
else
{
	$customer = mysqli_fetch_assoc($fetchaccount);
	$receiver = $customer['customername'];
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

