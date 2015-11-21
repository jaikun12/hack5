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
					<li><a href="">Register Your Business</a></li>
					<li><a href="">Login</a></li>
				</ul>
			</div>
		</nav>

		<div class="row no-padding">
			<div class="full-height col s3 z-depth-2">
				<div class="row">
				<div class="input-field col s12">
				<select name="location">
					<option value="" disabled selected>Location</option>
      				<option value="1">Option 1</option>
     				<option value="2">Option 2</option>
      				<option value="3">Option 3</option>
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