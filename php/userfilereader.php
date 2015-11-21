<?php 
	session_start();
	include_once("Classes/PHPExcel/IOFactory.php");
	include("../../files/config.php");
	include("DbConnection.php");
	$dbconnect -> connect($DBuser, $DBpass, $DBurl );
	$dbconnect -> useDb($Database);
	
//Rule
	$filetypes= array("xml","xls","xlsx","pdf","csv");
	
	$query = mysql_query("SELECT * FROM user_info_table");
	
	//POST//
	echo $username = $_SESSION['username'];
	echo $marketname = $_SESSION['marketname'];
	echo $city = $_SESSION['location'];
	//
	

	if(isset($_FILES['upload'])){
		$file = $_FILES['upload'];
		$filename=$file['name'];
		$file_ext=explode(".",$filename);
		$file_ext=strtolower(end($file_ext));
		$inputFileName = $file['tmp_name'];
		
		if(in_array($file_ext,$filetypes)){
			try {
				$inputFileType = PHPExcel_IOFactory::identify($inputFileName);
				$objReader = PHPExcel_IOFactory::createReader($inputFileType);
				$objPHPExcel = $objReader->load($inputFileName);
			} catch(Exception $e) {
				die('Error loading file "'.pathinfo($inputFileName,PATHINFO_BASENAME).'": '.$e->getMessage());
			}
			$ActiveSheet = $objPHPExcel->getSheet(0); 
			$highestRow = $ActiveSheet->getHighestRow(); 
			$highestColumn = $ActiveSheet->getHighestColumn();
			
			$date = $ActiveSheet -> getCell('A1')->getValue();

			
			for($row = 3; $row<=$highestRow; $row++){	
				$rowData = $ActiveSheet->rangeToArray("A".$row.":".$highestColumn.$row,NULL,TRUE,FALSE);
				
				
			
					
					$comodity = $rowData[0][0];
					$price =  $rowData[0][1];
					
					
				
					
					$query = mysql_query("INSERT INTO `marketprices_table`(`table_key`, `date`, `name_of_market`, `city`, `comodity`, `price`, `market_type`, `username`) VALUES ('','$date','$marketname','$city','$comodity','$price','Private','$username')");
					echo $row;
					
					}
				
					
			
		header("Location: ../user-dash.ph");
		
		
		
		
	}else{
		echo"weee1";
	}
		
	}else{
		echo"weee2";
	}
	
?>