<?php

	include_once("Classes/PHPExcel/IOFactory.php");
	include("../../files/config.php");
	include("DbConnection.php");
	$dbconnect -> connect($DBuser, $DBpass, $DBurl );
	$dbconnect -> useDb($Database);
	
	
	//POST//
	$username = $_POST['username'];
	$password = $_POST['password'];
	$marketname = $_POST['marketname'];
	$city = $_POST['location'];
	$lat = $_POST['lat'];
	$long = $_POST['lng'];
	
	//
	
	$query = mysql_query("INSERT INTO `user_table`(`user_key`, `username`, `password`) VALUES ('','$username','$password')");
	
	$query = mysql_query("INSERT INTO `user_info_table`(`user_info_key`, `username`, `market_name`, `location`) VALUES ('','$username','$marketname','$city')");

	$query = mysql_query("INSERT INTO `market_coordinates`(`name_of_market`, `latitude`, `longtitude`) VALUES('$marketname','$lat', '$long');");

	header("Location: ../login.php");
?>