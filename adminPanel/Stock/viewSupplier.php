<!DOCTYPE html>
<html>

<head>
	<title> View Supplier </title>
	<link rel = "stylesheet" href = "table.css" />
<head>

<body>
<div class="page">
<h1>Supplier Details</h1>
	<div class="main">
	
	
	<?php
		//if(isset($_post["views"])){
			require("../db/db.php") ;
			$sql = "SELECT * FROM supplier";
			
			$result = mysqli_query($connection , $sql);
			
			echo "<table border= 0>
			<tr>
			<th>Supplier No</th>
			<th>Company Name</th>
			<th>Permenant Address</th>
			<th>Contact No</th>
			<th>Email Address</th>
			</tr>";

			if(mysqli_num_rows($result) > 0){
				while($row = mysqli_fetch_array($result)){
					echo "<tr><td>".$row['supplier_No']."</td><td>".$row['Company_Name']."</td><td>".$row['Permenant_Address']."</td><td>".$row['Contact_No']."</td><td>".$row['Email_Address']."</td></tr>";
					
				}

			echo "</table>";
			}
			else{
					echo "No results";
			}
			
			mysqli_close($connection);
			
		//}
	?>
</div>
<INPUT Type="BUTTON" name="back" class="back" Value="X" Onclick="window.location.href='admin.php'">
</div>
<body>

</html>
