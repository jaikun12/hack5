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

	</head>
	<body>
		
		<nav class="main-nav">
			<div class="container">
			<h2><b>Thriftr</b></h2>
			</div>
		</nav>

		<div id="side-forms" class="form-group col-lg-3">

			<div class="col-lg-12">
				<select id="loc" class="form-control" onchange="alert('asdasd');">
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

		
		




	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

		<script src="js/ripples.min.js"></script>
        <script src="js/material.min.js"></script>
        <script>
            $(document).ready(function() {
                // This command is used to initialize some elements and make them work properly
                $.material.init();
            });
        </script>

	</body>
</html>