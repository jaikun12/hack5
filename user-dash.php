<!DOCTYPE html>
<html>
		
	<head>
		<link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection"/>
		<link rel="stylesheet" type="text/css" href="css/thriftr.css"/>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<title>Thriftr | Save up</title>

		<?php 
			session_start();
			$market_name = $_SESSION['marketname'];

			?>


	</head>
	<body>
		
		<nav class="teal">
			<div class="nav-wrappper">
				<a href="#" class="brand-logo"><b>Thriftr</b></a>
				<ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="#">Welcome, <b><?php echo "$market_name";?></b></a></li>

					<li><a href="">About</a></li>
					
					<li><a href="login.php">Logout</a></li>
				</ul>
			</div>
		</nav>

		<div class="container z-depth-2 margin">
			<h5>Your Market</h5>
			<p>Upload your file here to define your market's products.</p>
			<form action="php/" method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="file-field input-field col s9">
						<div class="btn">
						<span>Browse</span>
						<input type="file" name="upload">
						</div>
					<div class="file-path-wrapper">
						<input class="file-path validate" type="text">
					</div>
				</div>
					<div class="col s3">
					<button type="submit" class="waves-effect waves-teal btn-flat">Send <i class="tiny material-icons">input</i></button>
					</div>
			</div>

			</form>
		</div>







	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/materialize.min.js"></script>

		<script>

  		$(document).ready(function() {
    $('select').material_select();
  });
        </script>

	</body>
</html>