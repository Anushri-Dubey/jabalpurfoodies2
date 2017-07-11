<?php
	include "../config.php";
	//session_start();
	//$rid=$_SESSION["id"];
	$id=$_GET["id"];
	$rev=mysqli_query($con,"select * from review where id=$id");
	$row=mysqli_fetch_assoc($rev);
	$ret="delete from review where id=$id";
	$weget=mysqli_query($con,$ret);
	$rid=$row["restaurant_id"];
	header("location:particularrestruant.php?id=$rid&enter=1");



?>