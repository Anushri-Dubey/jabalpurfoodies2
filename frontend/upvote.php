<?php
	
	include "../config.php";
	//session_start();
	//$rid=$_SESSION["id"];
	$id=$_GET["id"];
	$count=mysqli_query($con,"select * from review where id=$id");
	//echo $count;
	$row=mysqli_fetch_assoc($count);
	print_r ($row);
	$rid=$row["restaurant_id"];
	$up=$row["likes"]+1;
	echo $up;
	$ret="update review set likes=$up where id=$id";
	
	echo $ret;
	$weget=mysqli_query($con,$ret);
	
	header("location:particularrestruant.php?id=$rid&enter=1");


?>

