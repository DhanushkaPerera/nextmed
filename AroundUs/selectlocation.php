<?php
	require("../db/db.php");
					
	$sql = "SELECT location FROM hospital ORDER BY location ASC";
					
	$res = mysqli_query($db,$sql);
					
	if($res){
		/*echo "<li>";*/
						
		while($row = mysqli_fetch_array($res)){
			echo $row['location']."<br>";
		}
						
		/*echo "</li>";*/
	}
	else{
		echo "Error : " . mysqli_error($db); 
	}
	
	//close connection
	mysqli_close($db);
?>