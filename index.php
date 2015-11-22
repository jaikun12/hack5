<!DOCTYPE html>
<html>
		
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen,projection"/>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0"> 
		<link rel="stylesheet" type="text/css" href="css/thriftr.css"/>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="css/roboto.min.css" rel="stylesheet">
        <link href="css/material.min.css" rel="stylesheet">
        <link href="css/ripples.min.css" rel="stylesheet">
		<title>Thriftr | Save up</title>
		<?php
	include_once("php/Classes/PHPExcel/IOFactory.php");
	include("../files/config.php");
	include("php/DbConnection.php");
	$dbconnect -> connect($DBuser, $DBpass, $DBurl );
	$dbconnect -> useDb($Database);
	?>

	</head>
	<body>
		
		<nav class="main-nav valign">
			<div class="container valign">
			<img src="img/thriftr_login.png" class="pull-left small"/>
			<h2 class="pull-left" style="margin-left:10px;"><b>Thriftr</b></h2>
			<a href="about.html" class="btn pull-right"><h4 class="white">About</h4></a>
			<a href="register.php" class="btn pull-right"><h4 class="white">Register Your Business</h4></a>
			<a href="login.php" class="btn pull-right"><h4 class="white">Login</h4></a>
			</div>
		</nav>
		<form action='index.php' method='GET' >
		<div id="side-forms" class="well form-group col-lg-3">
		<input type="text" name='search' value='1' style="display:none;">
			<div class="col-lg-12">
				<select id="loc" class="form-control" name='city' onchange="moveMap(this)">
					<option value="">Choose your location</option>
      				<option value="a">Malabon City</option>
     				<option value="b">Mandaluyong City</option>
      				<option value="c">Manila City</option>
      				<option value="d">Marikina City</option>
      				<option value="e">Muntinlupa City</option>
      				<option value="f">Pasay City</option>
      				<option value="g">Pasig City</option>
      				<option value="h">San Juan City</option>
      				<option value="i">Quezon City</option>
      			</select>
      		</div>

      		<div class="col-lg-8">
      			<input type="text" name='product' class="form-control" placeholder="Search for item">
      		</div>
			
      		<div class="col-lg-4">
      			<input type="submit" class="form-control" value='Search'>
      		</div>

      		<div class="col-lg-8">
      			<p>Want to know where you can find the produce you want in the cheapest price?</p>
      			<p>Pick your location and type the produce you want to learn where you can find it at the cheapest price.</p>
      		</div>

      		
      			
      				<a href="index.php" class="btn btn-default">Clear Filter</a>
      			
      		


      		
  		
		
			
		

		</div>
		</form>
		
		<div id="map" class="col-lg-9" >
		</div>




	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/ripples.min.js"></script>
    <script src="js/material.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script type="text/javascript" src="js/gmaps.js"></script>
	
	
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
				
            });
        </script>
		<script type="text/javascript" src="js/react.js"></script>
		<?php
		
		
		if(isset($_GET['search'])){
			
			switch($_GET['city']){
				
				case 'a':$_SESSION['location']='Malabon City';break;
				case 'b':$_SESSION['location']='Mandaluyong City';break;
				case 'c':$_SESSION['location']='Manila City';break;
				case 'd':$_SESSION['location']='Marikina City';break;
				case 'e':$_SESSION['location']='Muntinlupa City';break;
				case 'f':$_SESSION['location']='Pasay City';break;
				case 'g':$_SESSION['location']='Pasig City';break;
				case 'h':$_SESSION['location']='San Juan City';break;
				case 'i':$_SESSION['location']='Quezon City';break;
			}
			$city = $_SESSION['location'];
			$product = $_GET['product'];
			$query= mysql_query("SELECT * FROM `marketprices_table` WHERE city='$city' AND UPPER(comodity) LIKE UPPER('$product%') ORDER BY price ASC");
			$i=0;
			while($result = mysql_fetch_array($query)){
				$market_name = $result['name_of_market'];
				if($i<1){
				echo $market_name;
				$query2 = mysql_query("Select * FROM market_coordinates where name_of_market = '$market_name'; ");
				$result2 = mysql_fetch_array($query2);
				$lat = $result2['latitude'];
				$lon = $result2['longtitude'];
				$name = $result2['name_of_market'];
				$overlay = '<div class="overlay">Cheapest Here!</div>';
				echo"<script type='text/javascript'>
					map.drawOverlay({
						lat: '$lat',
						lng: '$lon',
						content:" . "'". $overlay ."'"."
					});
					</script>";
				$i=1;
				echo "<script type='text/javascript'>
				map.addMarker({
				lat: '$lat',
				lng: '$lon',
				title: '$name',
				infoWindow: {
				content: '<p><b>$name Products</b></p>'
			}
				});
				map.setCenter($lat, $lon);
				map.setZoom(14);
			</script>";
				}else{
					$query2 = mysql_query("Select * FROM market_coordinates where name_of_market = '$market_name' ");
				$result2 = mysql_fetch_array($query2);
				$lat = $result2['latitude'];
				$lon = $result2['longtitude'];
				$name = $result2['name_of_market'];
				
					echo "<script type='text/javascript'>
				map.addMarker({
				lat: '$lat',
				lng: '$lon',
				title: '$name',
				infoWindow: {
				content: '<p><b>$name Products</b></p><br>";
				
				$query2 = mysql_query("SELECT * FROM marketprices_table WHERE name_of_market = '$name'");
				while($result2 = mysql_fetch_array($query2)){
					echo $result2['comodity']." <b>".$result2['price']."</b><br>";
				}
				echo"'
			}
				});
			</script>";
			}
				
				
				
			}
		}else{
		
			$query = mysql_query("Select * FROM market_coordinates");
		
		
			while($result = mysql_fetch_array($query)){
				 $lat = $result['latitude'];
				 $lon = $result['longtitude'];
				 $name = $result['name_of_market'];
				
			
			echo "<script type='text/javascript'>
				map.addMarker({
				lat: '$lat',
				lng: '$lon',
				title: '$name',
				infoWindow: {
				content: '<p><b>$name Products</b></p><br>";
				
				$query2 = mysql_query("SELECT * FROM marketprices_table WHERE name_of_market = '$name'");
				while($result2 = mysql_fetch_array($query2)){
					echo $result2['comodity']." <b>".$result2['price']."</b><br>";
				}
				echo"'
			}
				});
			</script>";
			}
		}
	?>

	</body>
</html>