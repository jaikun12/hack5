<?php 
	//Connecting---
			include("../../files/config.php");
			include("DbConnection.php");
			$dbconnect -> connect($DBuser, $DBpass, $DBurl );
			$dbconnect -> useDb($Database);
			//----

			session_start();

			$user = $_POST['username'];
			$password = $_POST['userpass'];

			$check = mysql_query("SELECT * FROM user_table WHERE username = '$user' AND password = '$password';");
			if(mysql_num_rows($check)!=0){
				$get_market = mysql_query("SELECT * FROM user_info_table WHERE username = '$user';");
				while($result = mysql_fetch_array($get_market)){
					$_SESSION['marketname'] = $result['market_name'];
				}
				header("Location: ../user-dash.php");
				$dbconnect -> closeConnection();
				

			}
			else{
				header("Location: ../login.php");
			}



			?>

