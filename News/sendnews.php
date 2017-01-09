<?php

		require("../db/db.php");
		
		$sql = "INSERT INTO news(postnews,date)
			VALUES ('$_POST[public_notice]','$_POST[postdate]')";
			
		if(mysqli_query($db , $sql)){
			echo "New record created Successfully";
		}
		
		else{
			echo "Error : " . mysqli_error($db); 
		}
		
		mysqli_close($db);

?>