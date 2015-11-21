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
        <!--<div class="container" id="header">
            
            
        </div>-->
        <div class="container">
            <div id="content">
            <form class="col s12" action="login.php" method="post">
                <h2>Register your market!</h2>
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
                          <input id="password" type="password" class="validate" required>
                          <label for="password">Password</label>
                        </div>
                    </div>
                <br>
                <h4>MARKET INFORMATION</h4>
                <hr class="style-one">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="marketname" type="text" class="validate" required>
                            <label for="marketname">Market Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select required>
                                <option value="" disabled selected>Choose your location</option>
                                <option value="1">Malabon City</option>
                                <option value="2">Mandaluyong City</option>
                                <option value="3">Manila City</option>
                                <option value="4">Marikina City</option>
                                <option value="5">Muntinlupa City</option>
                                <option value="6">Pasay City</option>
                                <option value="7">Pasig City</option>
                                <option value="8">Quezon City</option>
                                <option value="9">San Juan City</option>
                            </select>
                            <label>Location</label>
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