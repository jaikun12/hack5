<!DOCTYPE html>
<html>
		
	<head>
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection"/>
		<link rel="stylesheet" type="text/css" href="css/thriftr.css"/>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<title>Thriftr | Save up</title>

	</head>
	<body>
		
		<nav class="teal">
			<div class="nav-wrappper">
				<a href="#" class="brand-logo"><b>Thriftr</b></a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="">About</a></li>
					<li><a href="register.php">Register Your Business</a></li>
					<li><a href="login.php">Login</a></li>
				</ul>
			</div>
		</nav>

		<div class="row no-padding">
			<div class="full-height col s3 z-depth-2">
				<div class="row">
				<div class="input-field col s12">
				<select name="location">
					<option value="" disabled selected>Cities</option>
      				<option value="a">Malabon</option>
     				<option value="b">Mandaluyong</option>
      				<option value="c">Manila</option>
      				<option value="d">Marikina</option>
      				<option value="e">Muntinlupa</option>
      				<option value="f">Pasay City</option>
      				<option value="g">Pasig City</option>
      				<option value="h">San Juan</option>
      				<option value="i">Quezon City</option>
    			</select>
   				 
 				 </div>
 				 </div>

 				 <div class="row">
 				 	<div class="input-field col s12">
 				 		<input type="text" name="item">
 				 		<label for="item">Search For Item</label>
 				 	</div>
 				 </div>

			
		</div>

			<div class="full-height col s9">
			</div>
		</div>




	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/materialize.js"></script>

		<script>

  		$(document).ready(function() {
    $('select').material_select();
  });
        </script>

	</body>
</html>