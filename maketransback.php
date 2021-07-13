<?php 
include "database.php";
$sender = $_POST['a'];
$receiver = $_POST['b'];
$money = $_POST['c'];
$fetch1=mysqli_query($database,"select *from customers where customername='$sender' ");
$sent = mysqli_fetch_assoc($fetch1);
$fetch2 = mysqli_query($database,"select *from customers where customername='$receiver' ");
$received = mysqli_fetch_assoc($fetch2);
$balance = $sent['bankbalance'];
if($balance<$money){
	echo "insufficient balance";
}

?>