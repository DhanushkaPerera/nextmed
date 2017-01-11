<?php
	
		require("../db/db.php");
		
		if(isset($_POST["buttonSub"])){
			
			//Retrieve Data
			$sql = "INSERT INTO doctor(name,category,hospital) VALUES ('$_POST[name]' , '$_POST[category]' , '$_POST[hospital]')";
			
			//$sql = "SELECT DISTINCT username FROM user";
			$res = mysqli_query($db , $sql);
				
			if($res){
				echo "New record created Successfully";
			}
			else{
				echo "Error : " . mysqli_error($db); 
			}
		
		}
		
		//Close connectionection
		mysqli_close($db);
		
?>