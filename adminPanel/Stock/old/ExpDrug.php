<html>
    <head>
         
        <title>View Drugs</title>
		<link rel = "stylesheet" href = "table.css" />

    </head>
    <body>
	<div class="page">
	<h1>Drugs about to Expire</h1>
	<div class="main">
	
<?php
		require("../db/db.php");
    

    $sql = "SELECT DrugNo , Supplier , ExpDate 
					FROM drug
					ORDER BY  ExpDate DESC";
	$res = mysqli_query($connection,$sql);
    

    echo "<table border= 0>
	
	
    <tr>
    <th>Drug No</th>
    <th>Supplier</th>
    <th>Expire Date</th>
    </tr>";
	
	if (mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_array($res)){
            
				
			echo "<tr><td>".$row['DrugNo']."</td><td>".$row['Supplier']."</td><td>".$row['ExpDate']."</td></tr>";
        
		}

    echo "</table>";
	}else{
		echo "no";
	}
	mysqli_close($connection);
	
	?>
	</div>
	<INPUT Type="BUTTON" name="back" class="back" Value="X" Onclick="window.location.href='../admin.php'">
	</div>
	</body>
	</html>
