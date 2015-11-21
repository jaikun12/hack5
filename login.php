<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Login | Thrifter</title>
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen, projection">
        <link rel="stylesheet" href="css/login.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <?php
            session_destroy(); ?>
    </head>
    <body>
        <div class="container">
            <center>
            <div id="login-container">
                <center>
                    <div class="row">
                        <h3>LOGO</h3>
                    </div>
                </center>
                <form class="col s12" action="php/authentication.php" method="POST">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="text" class="validate" name="username">
                            <label for="email">Username</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="userpass">
                            <label for="password">Password</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Login</button>
                </form>
                
            </div>
            </center>
        </div>
        
        <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>