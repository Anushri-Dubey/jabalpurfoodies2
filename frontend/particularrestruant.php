<?php
include "header.php"
?>
	
	
	<?php
		$id=$_GET["id"];
		$ret="select * from restaurant where id=$id";
		echo $ret;
		$weget=mysqli_query($con,$ret);
		$row=mysqli_fetch_assoc($weget);
	?>

	<div class="imgofpr">
		<img src =<?php 
		$array=explode(",",$row['images']);
		echo $array[0];  ?>  >

		<h1>
			<?php
			echo strtoupper($row["name"]);
			?>
		</h1>
	
	</div>
	<!--<div class="somemore" style="margin-bottom:20px;">
		<div class="container">
										
		<div class="info" style="float:left;color:#253251;  margin-left:50px; width:300px; height:200px; text-align:center;">
									<i class="fa fa-star-half-empty fa-3x" style="border:3px solid #253251; border-radius:100%; padding:20px;"></i>
									<h3>Rating Of Restaurant</h3>
									<h3><?php  //echo $row["rating"]; ?></h3>
								</div>
								<div class="info" style="float:left;color:#253251; margin-left:50px; width:300px; height:200px; text-align:center;">
									<i class="fa fa-clipboard fa-3x" style="border:3px solid #253251; border-radius:100%; padding:20px;"></i>
									<h3>Description</h3>
									<h3><?php  //echo $row["description"]; ?></h3>
								</div>
								<div class="info" style="float:left;color:#253251; margin-left:50px; width:300px; height:300px; text-align:center;">
									<i class="fa fa-cutlery fa-3x" style="border:3px solid #253251; border-radius:100%; padding:20px;"></i>
									<h3>Special Food</h3>
									<h3><?php  //echo $row["speciality"]; ?></h3>
								</div>
								
							</div>
								<div class="clear"></div>
						</div>-->

<div class="ready">
			<div class="container">
			
			
				<h1>Ready Solution</h1>
				
				<div class="outer">
					<h2>Facilities</h2>
					<div class="inner">
						<h3>Highlights</h3>
						<ul>
						<li>&nbsp;Seating</li>
						<li>&nbsp;Home Delivery</li>
						<li>&nbsp;Amazing Offers</li>
						</ul>
						<h3>Special Food</h3>
						<ul>
							<li>&nbsp;&nbsp;<?php 
						echo $row["speciality"];
						?></li>
						</ul>
					</div class="someitem">
						<h3>Enjoy our services</h3>
				</div>
				
				<div class="outer">
					
					<h2>Contacts</h2>
					<div class="inner">
						<h3>Phone Number</h3>
						<ul>
						<li>Telephone</li>
							<ul>
								<li><?php 
								echo $row["contact_no"];
								?></li>
							</ul>
						
						</ul>
						<h3>Address</h3>
						<ul>
						<li><?php 
						echo $row["address"];
						?></li>
						</ul>
					</div>
					<h3>Contact Us</h3>
				</div>
				<div class="outer">
					<h2>Serving Hours</h2>
					<div class="inner">
						<h3>Opening Hours</h3>
						<ul>
						<li>11 AM - 8 PM</li>
						
						</ul>
						<h3>Charges For Two</h3>
						<ul>
						<li>&nbsp;&nbsp;<?php 
						echo $row["cost_for_2"];
						?></li>
						</ul>
					</div>
					<h3>Event Organisers</h3>
				</div>
				<div class="outer">
					<h2>Somemore Info</h2>
					<div class="inner">
						<h3>Rating</h3>
						<ul>
						<li>&nbsp;&nbsp;<?php 
						echo $row["rating"];
						?></li>
						
						</ul>
						<h3>Description</h3>
						<ul>
						<li>&nbsp;&nbsp;<?php 
						echo $row["description"];
						?></li>
						</ul>
					</div>
					<h3>Information</h3>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	
	<!--</div>-->
			<div class="reviews">
			
					<img src="img/contact.jpg" >
			<div class="container">		
				<div class="formreview">
					<!--<div class="row">
			<div class="col-md-7 col-md-offset-1 well">-->
					<h1>Comment Section</h1>
					<?php $sno=$row["id"]; ?>
				<form id="myform" action="comment.php" method="post">
					
					<div class="form-group" >
						
						<input type="text" class="form-control" id="name" placeholder="UserName" name="name" >
					</div>
					<div class="form-group">
						
						<input type="text" class="form-control" id="passfield" placeholder="ResturanT_id" name="restaurant_id" value="<?php 
						
						echo ($row['name']); ?>" >
					</div>
					<div class="form-group">
						<textarea class="form-control" rows="8" id="ta" cols="80" placeholder="Enter Your Comments" name="comment"></textarea>
					</div>
					<div class="form-group">
					<input type="hidden" name="restaurant_id" class="form-control" value=<?php echo $row["id"];  ?> >
					</div>
					<input class="btn btn-success btn-lg btn-block" id="btnkya" value="Comment" type="submit">
					
				</form>
				
			</div>
		<!--</div>-->
			</div>
		</div>
				 <center><h3>My Google Maps Demo</h3></center>
							<div id="map"></div>
							<script>
							  function initMap() {
								var uluru = {lat: <?php echo $row["lat"]; ?>, lng: <?php echo $row["lng"]; ?>};
								var map = new google.maps.Map(document.getElementById('map'), {
								  zoom: 4,
								  center: uluru
								});
								var marker = new google.maps.Marker({
								  position: uluru,
								  map: map
								});
							  }
							</script>
							<script async defer
							src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0B3rHysHLWns7Yl2_VRbq4nZXIKpDFEM&callback=initMap">
							</script>
					
		<div class="commentadd">
			<div class="container">
						<h1>Previous Comments</h1>
			<p class="marsome">
					
					<?php
					
					if(isset($_GET["enter"]))
					{
					
									
						
									$user=mysqli_query($con,"select * from review where restaurant_id=$id");
									while($weget=mysqli_fetch_assoc($user))
									{

										echo "<br><br><div class='comment' style='border:1px solid #FEB8D5; border-radius:10px; width:650px; color:#000; background:#FEB8D5;'>";
											
										$idno=$weget["id"];
										$ret=mysqli_query($con,"select name from restaurant where id=$id");
										$row=mysqli_fetch_assoc($ret);
										//echo "<table>";
										
										//echo "&nbsp;&nbsp;&nbsp;<b>User_Id: ".$weget["user_id"]."</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										//&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$row["name"]."</b><hr>";
										
										echo "&nbsp;&nbsp;&nbsp;<b>Comment for the restaurant </b><br><br><i> ".$weget["comment"]."</i><hr>";
										
										echo "&nbsp;&nbsp;&nbsp;<b><a href='cancel.php?id=$idno'><i class='fa fa-remove fa-fw'></i>Delete</a></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										<b><a href='upvote.php?id=$idno'><i class='fa fa-thumbs-o-up fa-fw'>
										</i>upvote ({$weget['likes']}) </a></b>
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><a href='downvote.php?id=$idno'><i class='fa fa-thumbs-o-down fa-fw'></i>Downvote ({$weget['dislikes']})</a></b>";
										
										
										echo "</div>";
									}
									
									
					
					
					}
					else
					{
						echo "<br><h3>No Comments Yet!!!</h3>";
						
					}
					?>
				
					</p>
		</div>
		</div>
			

<?php
include "../footer.php"
?>