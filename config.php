<?php 

$con = mysqli_connect("localhost" , "root" , "" , "jabalpurfoodies");
if(!$con) {
	die("cant connect to database");
}

$SITE_URL = "http://localhost/jabalpurfoodies/";
