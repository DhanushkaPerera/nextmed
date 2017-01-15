<?php
	
		require("../../db/db.php");
			
			//RETRIEVE DATA
			$sql = "INSERT INTO hospital(hospitalname,location,telephonenum) VALUES ('$_POST[hospitalname]' , '$_POST[location]' , '$_POST[telephonenum]')";
			
			//$sql = "SELECT DISTINCT username FROM user";
			$res = mysqli_query($db , $sql);
				
			if($res){
				echo "New record created Successfully";
			}
			else{
				echo "Error : " . mysqli_error($db); 
			}

		
		//Close connectionection
		mysqli_close($db);
		
?>