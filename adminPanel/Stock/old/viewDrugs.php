<html>
    <head>
         
        <title>View Drugs</title>
		<link rel = "stylesheet" href = "tableDrug.css" />

    </head>
    <body>
	<div class="page">
	<h1>Drug Details</h1>
	<div class="main">
	
<?php
	require("../db/db.php");
	
    

    $sql = "select * from drug";
	$res = mysqli_query($connection,$sql);
    

    echo "<table border= 0>
	
    <tr>
    <th>Drug No</th>
	<th>Genetic Name</th>
    <th>Drug Brand Name</th>
    <th>Drug Alternatives</th>
    
    <th>Dosage Form</th>
    
    <th>Dose per Person</th>
    
	
	<th>Supplier</th>
	<th>Quantity</th>
	
	<th>Exp Date</th>
	<th>Ordered Price</th>
	<th>Profit%</th>
	<th>Retail Price</th>
	<th>Return Policy</th>
	<th>Discount %</th>
	<th>Discounted Price </th>
    </tr>
	";
	
	if (mysqli_num_rows($res) > 0){
        while($row = mysqli_fetch_array($res)){
            
				
			echo "<tr><td>".$row['DrugNo']."</td><td>".$row['GeneticName']."</td><td>".$row['DrugBrandName']."</td><td>".$row['DrugAlternatives']."</td><td>".$row['DosageForm']."</td><td>".$row['DosePerPerson']."</td><td>".$row['Supplier']."</td><td>".$row['Quantity']."</td><td>".$row['ExpDate']."</td><td>".$row['OrderedPrice']."</td><td>".$row['Profit']."</td><td>".$row['RetailPrice']."</td><td>".$row['ReturnPolicy']."</td><td>".$row['Discount']."</td><td>".$row['DiscountedPrice']."</td></tr>";
        
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
