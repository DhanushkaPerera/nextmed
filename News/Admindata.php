<?php

		require("../db/db.php");
		
		$sql = "INSERT INTO news('postnews')
			VALUES ('$_POST[public_notice]')";
			
		if(mysqli_query($connection , $sql)){
			echo "New record created Successfully";
		}
		
		else{
			echo "Error : " . mysqli_error($connection); 
		}
		
		mysqli_close($connection);

?>