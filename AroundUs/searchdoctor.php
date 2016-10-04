<?php
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "pharmacy";
	
	//Connect Database
	$conn = mysqli_connect($servername,$username,$password,$database);
	
	//Check Connection
	if(!$conn){
		die("Connection Failed : " . mysqli_connect_error());
	}
	
	//Retrieve Data
	$sql = "SELECT * FROM doctor"; //WHERE specialistname = '$_POST[special]'";
	//$sql = "SELECT DISTINCT username FROM user";
	$res = mysqli_query($conn , $sql);
		
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
		echo "Error : " . mysqli_error($conn); 
	}
	
	//Close Connection
	mysqli_close($conn);
?>