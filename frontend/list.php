<?php 
include "header.php";
?>

<section>
	<div class="sidebyside">
		<div class="filter">
			<div class="box">
				<div class="row">
					<form class="form" action="list.php?enterelement=1" method="post">
								<label for="exampleInputPassword3">Restaurant</label>
										
									<div class="form-group">
									<input type="text" class="form-control" id="exampleInputPassword33" placeholder="Resturant Name" name="name">
									 </div>
									   
									  
										
									<label>Cost Price</label>
										<div class="form-group">
											<select class="form-control" name="cost">
												<option value="1">100-499</option>
												<option value="2">500-699</option>
												<option value="3">700-899</option>
												<option value="4">900-999</option>
												<option value="5">1000-1499</option>
												<option value="6">1500-1999</option>
												<option value="7">2000-2499</option>
													  
											</select>
										</div>
										
									<label>Type of Restaurant</label>		
										<select class="form-control" name="restro">
											<option value="5-star">5-star</option>
												<option value="3-star">3-star</option>
												<option value="cafe">cafe</option>
												<option value="pub">pub</option>
												<option value="bar">bar</option>
										</select>
													
													
									<label>Rating</label>
										<div class="form-group">
											<select class="form-control" name="rating">
												<option value="1">5</option>
												<option value="2">4-4.9</option>
												<option value="3">3-3.9</option>
												<option value="4">2-2.9</option>
												<option value="5">1-1.9</option>
												<option value="6">0-.9</option>
												<option value="7">0</option>
											</select>
										</div>
									<div class="vegnonveg">
										<label >Type of resturant </label>
											<div class="radio">
													<label>
													<input type="radio" name="typeofrestro" id="optionsRadios1" value="veg" checked>
													Vegetartian
													</label>
											</div>
											<div class="radio">
												<label>
												<input type="radio" name="typeofrestro" id="optionsRadios2" value="non-veg">
												Non&mdash;Vegetartian
												 </label>
											</div>
									</div>
									<div class="specificfood">
										<label>Specific Food</label>
											<div class="radio">
												<label>
												<input type="radio" name="speciality" id="optionsRadios1" value="Chinese" checked>
												Chinese
												</label>
											</div>
											<div class="radio">
												<label>
												<input type="radio" name="speciality" id="optionsRadios2" value="Punjabi">
												Punjabi
												</label>
											</div>
												
											<div class="radio">
												<label>
												<input type="radio" name="speciality" id="optionsRadios2" value="Breakfast">
												Breakfast
												</label>
											</div>
											<div class="radio">
												<label>
												<input type="radio" name="speciality" id="optionsRadios2" value="Launch">
												Launch
												</label>
											</div>
											<div class="radio">
												<label>
												<input type="radio" name="speciality" id="optionsRadios2" value="Snacks">
												Snacks
												</label>
											</div>
											<div class="radio">
												<label>
												<input type="radio" name="speciality" id="optionsRadios2" value="Dinner">
												Dinner
												</label>
											</div>
											</div>	
									  
									<button type="submit" class="btn btn-primary btn-block btn-lg" id="btnwork">Show resturant</button>
					</form>
				</div>
			</div>
		</div>
	</div>

						<div class="sidebyside">
							<div class="filterlist">
								<div class="box">
								<div class="row">
									<table class="table table-striped table-responsive ">
									
									<?php
										if(!isset($_GET["enterelement"]))
										{			if($_POST["locality"]!="")
													{
												
													$locality=$_POST["locality"];
													$ret="select *from restaurant where locality='$locality'";
													$weget=mysqli_query($con,$ret);
													if(mysqli_num_rows($weget)==0)
													{
														echo "<img src='img/dog.jpg'>";
														echo "<h1  style='color:#D35400;'>Please enter correct location to see result!!</h1>";
															
													}
													else
													{
													
											/***************************filtrer***************************************/		
							
													$i=0;
													
													while($row=mysqli_fetch_assoc($weget))
													{
														$arr[$i]=$row["id"];
														$i++;
													}
									
										foreach($arr as $i)
										{
											$ret="select * from restaurant where id=".$i;
											
										
											$weget=mysqli_query($con,$ret);
											while($row=mysqli_fetch_assoc($weget))
											{ 	
										
												$no=$row["id"];
												$array=explode(",",$row['images']);
													
													
												
													echo "
													<tr><td><img src=$array[0] width='190px'></td>
													<td><a href='particularrestruant.php?id=$no'><b>".$row['name']."
													</b></a><br><i>".$row["description"]."</i><br><br>
													<i class='fa fa-star-half-full fa-fw'></i><b>Rating ".$row["rating"]."</td>
													<td><b>Special food :</b><i>".$row["speciality"]."
													</i><br><br><b>Address :</b> <i>".$row["address"]."
													</i><br><br><b>".$row["typeofrestro"]."</b></td>
													<td><b>Approx. Cost for two : </b><i class='fa fa-rupee fa-fw'></i><i>".$row["cost_for_2"]."</i>
													<br><br><i class='fa fa-phone fa-fw'></i><i>".$row["contact_no"]."</i><br><br></td></tr>";
												
											}
											
										}
										}
													
										}
											else
											{	echo "<img src='img/dog.jpg'>";
												echo "<h1  style='color:#D35400;'>Please enter location to see result!!</h1>";
											}
										}
										else
										{
										
											$name=$_POST["name"];
											$rating=$_POST["rating"];
											$typeofrestro=$_POST["typeofrestro"];
											$speciality=$_POST["speciality"];
											$restro=$_POST["restro"];
											$cost=$_POST["cost"];

											$ret="select * from restaurant where speciality='$speciality' and name='$name' and typeofrestro='$typeofrestro' and restro='$restro' and ";
												if($cost==1){$ret.="(cost_for_2>=100 and cost_for_2<=499)";}
												else if($cost==2){$ret.="(cost_for_2>=500 and cost_for_2<=699)";}
												else if($cost==3){$ret.="(cost_for_2>=700 and cost_for_2<=899)";}
												else if($cost==4){$ret.="(cost_for_2>=900 and cost_for_2<=999)";}
												else if($cost==5){$ret.="(cost_for_2>=1000 and cost_for_2<=1499)";}
												else if($cost==6){$ret.="(cost_for_2>=1500 and cost_for_2<=1999)";}
												else if($cost==7){$ret.="(cost_for_2>=2000 and cost_for_2<=2499)";}
												$ret.=" and ";
												if($rating==1){$ret.="(rating=5)";}
												else if($rating==2){$ret.="(rating>=4 and rating<=4.9)";}
												else if($rating==3){$ret.="(rating>=3 and rating<=3.9)";}
												else if($rating==4){$ret.="(rating>=2 and rating<=2.9)";}
												else if($rating==5){$ret.="(rating>=1 and rating<=1.9)";}
												else if($rating==6){$ret.="(rating>=0 and rating<=.9)";}
												else if($rating==7){$ret.="(rating=0)";}
												
											//echo $ret;

											$result=mysqli_query($con,$ret);
											if(mysqli_num_rows($result)==0)
													{
														echo "<img src='img/dog.jpg'>";
														echo "<h1  style='color:#D35400;'>Please enter correct credentials to see result!!</h1>";
															
													}
													else
													{
													
											$i=0;
													
													while($row=mysqli_fetch_assoc($result))
													{
														$arr[$i]=$row["id"];
														$i++;
													}
									
										foreach($arr as $i)
										{
											$ret="select * from restaurant where id=".$i;
											
										
											$weget=mysqli_query($con,$ret);
											while($row=mysqli_fetch_assoc($weget))
											{ 	
										
												$no=$row["id"];
												$array=explode(",",$row['images']);
													
													foreach($array as $i)
												{
													echo "
													<tr><td><img src='$i' width='190px'></td>
													<td><a href='particularrestruant.php?id=$no'><b>".$row['name']."
													</b></a><br><i>".$row["description"]."</i><br><br>
													<i class='fa fa-star-half-full fa-fw'></i><b>Rating ".$row["rating"]."</td>
													<td><b>Special food :</b><i>".$row["speciality"]."
													</i><br><br><b>Address :</b> <i>".$row["address"]."
													</i><br><br><b>".$row["typeofrestro"]."</b></td>
													<td><b>Approx. Cost for two : </b><i class='fa fa-rupee fa-fw'></i><i>".$row["cost_for_2"]."</i>
													<br><br><i class='fa fa-phone fa-fw'></i><i>".$row["contact_no"]."</i><br><br></td></tr>";
												}
											}
										}	
											
										}
										}
											
									
									
												
									?>
									
									</table>
									</div>
					</div>
		
	</div>
	</div>
	<div class="clear"></div>
	</section>
	
	
 <?php 
include "../footer.php";
?>
	
	
	
