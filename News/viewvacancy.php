<!DOCTYPE html>
<html>

<head>
	<link type="text/css" rel="stylesheet" href="table.css">
</head>

<?php
	require("db.php");
	
	$sql = "SELECT * FROM vacancy";
	
	$res = mysqli_query($db,$sql);
	
	if($res){
		echo "
			<table>
			<tr>
				<th> Full Name</th>
				<th> Gender </th>
				<th> Date of Birth </th>
				<th> Permanent Address</th>
				<th> Current Living District </th>
				<th> Contact Number </th>
				<th> NIC </th>
				<th> E-mail </th>
				<th> Experience as a Pharmacist </th>
				<th> Information </th>
				<th> CV </th>
			</tr>
		";
		
		while($row = mysqli_fetch_array($res)){
			echo "<tr><td>". $row['FullName']."</td><td>".$row['Gender']."</td><td>".$row['DOB']."</td><td>".$row['Address']."</td><td>".$row['District']."</td><td>".$row['ContactNumber']."</td><td>".$row['NIC']."</td><td>".$row['Email']."</td><td>".$row['Experience']."</td><td>".$row['Information']."</td><td>".$row['CV']."</td></tr>";
		}
		echo "</table>";
	}
	else{
		echo "Error : " . mysqli_error($db); 
	}
	
	//Close Connection
	mysqli_close($db);
?>

</html>