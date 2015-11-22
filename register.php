<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Thrifter</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen, projection">
        <link rel="stylesheet" href="css/register.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
    <div class="container-fluid">
        <div class="pull-left" id="left">
            
            
        </div>
        <div class="">
            <div id="content">
            <form class="col s12" action="php/addaccount.php" method="post">
                <h2>Partner with <img src="img/thriftr_new_min.png" class="logo"></h2>
                <blockquote>
                    Please complete the form below.
                </blockquote>
                <h4>PERSONAL INFORMATION</h4>
                <hr class="style-one">
                    <div class="row">
                        <div class="input-field col s6">
                          <input id="first_name" type="text" class="validate" required>
                          <label for="first_name">First Name</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="last_name" type="text" class="validate" required>
                            <label for="last_name">Last Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <input id="email" type="email" class="validate" required>
                          <label for="email">Email</label>
                        </div>
                    </div>
					<div class="row">
                        <div class="input-field col s12">
                          <input id="username" type="text" name='username' class="validate" required>
                          <label for="username">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <input id="password" type="password" name='password' class="validate" required>
                          <label for="password">Password</label>
                        </div>
                    </div>
					<div class="row">
                <br>
                <h4>Register your market.</h4>
                <hr class="style-one">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="marketname" type="text" name='marketname' class="validate" required>
                            <label for="marketname">Market Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select required name='location'>
                                <option value="" disabled selected>Choose your location</option>
                                <option value="Malabon City">Malabon City</option>
                                <option value="Mandaluyong City">Mandaluyong City</option>
                                <option value="Manila City">Manila City</option>
                                <option value="Marikina City">Marikina City</option>
                                <option value="Muntinlupa City">Muntinlupa City</option>
                                <option value="Pasay City">Pasay City</option>
                                <option value="Pasig City">Pasig City</option>
                                <option value="Quezon City">Quezon City</option>
                                <option value="San Juan City">San Juan City</option>
                            </select>
                            <label>Location</label>
                        </div>
                    </div>
					<a href="http://www.mapcoordinates.net/" class="waves-effect waves-light btn">Find Location Coordinates Here</a>
					<div class="input-field col s12">
					  <input id="username" type="text" name='lat' class="validate" required>
					  <label for="username">Location Latitude</label>
					</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
						  <input id="password" type="text" name='lng' class="validate" required>
						  <label for="password">Location Longtitude</label>
						</div>
					</div>
                    <div class="row">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Register
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
            </form>
            </div>
            
        </div>
        </div>
        <!--<footer>
            <div class="container" id="footer">

            </div>
        </footer>-->
        
        
        
        
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/materialize.js"></script>
        <script>
        $(document).ready(function() {
        $('select').material_select();
        });
        </script>
    </body>
    
</html>