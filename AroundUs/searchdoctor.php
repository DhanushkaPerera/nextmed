<?php
	
	require("../db/db.php");
	
	//Retrieve Data
	$sql = "SELECT * FROM doctor"; //WHERE specialistname = '$_POST[special]'";
	//$sql = "SELECT DISTINCT username FROM user";
	$res = mysqli_query($connection , $sql);
		
	if($res){
		echo "<table border = 1>
			<tr>
			<th> Doctor </th>
			<th> Specialist </th>
			<th> Hospital </th>
			</tr>";
		while($row = mysqli_fetch_array($res)){
			echo "<tr><td>". $row['name']."</td><td>".$row['specialistname']."</td><td>".$row['hospital']."</td></tr>";
		}
		echo "</table>";
	}
	else{
		echo "Error : " . mysqli_error($connection); 
	}
	
	//Close Connection
	mysqli_close($connection);
?>