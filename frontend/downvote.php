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
	$dup=$row["dislikes"]+1;
	echo $dup;
	$ret="update review set dislikes=$dup where id=$id";
	
	echo $ret;
	$weget=mysqli_query($con,$ret);

	header("location:particularrestruant.php?id=$rid&enter=1");


?>

