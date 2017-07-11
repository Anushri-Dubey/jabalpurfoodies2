<?php 
include "header.php";
?>
	
    <!--<section class="main_banner">
    	<form class="form-inline">
		  <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0 input-lg" id="inlineFormInput" placeholder="Jane Doe">


		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
    </section>-->
	
	
		<script type="text/javascript">
		
			$(document).ready(function(){
				var option={
				items:1,
				margin:10,
				autoplay:true,
				dots:true};
				
				jQuery(".first_carousel").owlCarousel(option);

				var option={
				items:4,
				margin:10,
				autoplay:true,
				dots:true};
				
				jQuery(".second_carousel").owlCarousel(option);
				
				
			});
		</script>
	
		<div class="slider">
				
					<div class="searchbox">
						<div class="row">
			<div class="col-md-12">
									<img src="frontend/img/jf.png" width="350px">
									<form  action="frontend/list.php"  method="post">
									
									  <div class="form group">
										
									  
										<label class="sr-only" for="exampleInputPassword3">Location</label>
										<input type="text" class="form-control input-lg" id="exampleInputPassword3" placeholder="Location" name="locality">
										<!--<div class="input-group-addon input-lg" id="inpgrp" type="submit" ><i class="fa fa-search fa-fw"></i></div>-->
									  </div>
									  <button type="submit" class="btn btn-primary col-md-4 col-sm-2 col-md-offset-4 col-sm-offset-5 btn-lg" id="start" >Start</button>
									 
									</form>
									
					</div>
					</div>
					</div>
					
			<div class="first_carousel owl-carousel" style="margin-bottom:20px;">
				
							  <div  class="letme"> <img src="frontend/img/i7.jpg"></div>
							  <div  class="letme"> <img src="frontend/img/i4.jpg"></div>
							  <div  class="letme"> <img src="frontend/img/kfc.jpg"></div>
							  <div  class="letme"> <img src="frontend/img/cff.jpg"></div>
							  <div  class="letme"> <img src="frontend/img/i8.jpg"></div>
							  <div  class="letme"> <img src="frontend/img/i1.jpg"></div>
							  <div  class="letme"> <img src="frontend/img/dominos.jpg"></div>
							  <!--<div  class="letme"> <img src="img7.jpg"></div>	-->
							  
					</div>		  
				</div>
				<!----google map-->
				
				
				 <center><h3>My Google Maps Demo</h3></center>
							<div id="map"></div>
							<script>
							  function initMap() {
								var uluru = {lat: 23.1815, lng: 79.9864};
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
							
							
							
							
							
							<!--- end of google map--->
				<div class="about" id="aboutus" >
					<h2 >About Us</h2>
					<p style=" margin-top:20px;text-align:center; padding-left:60px;padding-right:60px;">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas 
					molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.
					Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime 
					placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus
					saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis
					voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</p>
					
				</div>
				
					<div class="dailypic">
						<div class="container">
					<h1>Daily Pics</h1>
					
					<?php
							echo '<div class="owl-carousel second_carousel">';
							$ret="select images from restaurant where pick=1";
											
										
											$weget=mysqli_query($con,$ret);
											while($row=mysqli_fetch_assoc($weget))
											{ 	
										
												
												$array=explode(",",$row['images']);
													
													
												foreach($array as $i)
												{
													echo "<div class='letmedo' style='height:190px;margin-bottom:20px;'><img src='$i' width='190px'></div>";
							
				
												}
											}
									echo "</div>";
								?>
		</div>
		</div>
			<!--<div class="row">
			<div class="contactus col-md-6 col-md-offset-3 " id="contactus" >
					<div class="cus">
						<i class="fa fa-phone fa-3x"></i>
						<i>9425466123</i>
					</div>
					
						
					<div class="cus">
						<a href="#"><i class="fa fa-facebook-square fa-3x"></i></a>
						
					</div>
					<div class="cus">
						<a href="#"><i class="fa fa-twitter-square fa-3x"></i></a>
						
					</div>
					<div class="cus">
						<a href="#"><i class="fa fa-instagram fa-3x"></i></a>
						
					</div>
					<div class="cus">
						<a href="#"><i class="fa fa-linkedin-square fa-3x"></i></a>
						
					</div>
					<div class="clear"></div>
				
				</div>
			</div>-->
  <?php 
include "footer.php";
?>