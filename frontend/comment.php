<?php
		include "../config.php";
		//session_start();
		
		if($_POST["comment"]=="")
		{
			header("location:particularrestruant.php");
		}
		else
		{
			$comment=$_POST["comment"];
			$restaurant_id=$_POST["restaurant_id"];
			
			$ret="insert into review set comment='$comment',restaurant_id=$restaurant_id";
			
			echo "<br>".$ret."<br>";
			$weget=mysqli_query($con,$ret);
			header("location:particularrestruant.php?id=$restaurant_id&enter=1");
			
		}














?>