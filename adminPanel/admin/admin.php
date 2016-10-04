<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link href="styles2.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div class="wrapper">
		<ul class="menu">
			<li class="active"><a href="#">DRUG</a>
				<ul class="submenu">
					<li><a href="adddrug.php" >ADD</a></li>
					<li><a href="viewDrugs.php" onclick="viewDrugs('result')">VIEW</a></li>
					<li><a href="ExpDrug.php">VIEW DRUGS ABOUT TO EXPIRE</a></li>
					<li><a href="updatedrug.php">UPDATE</a></li>
					<li><a href="removedrug.php">REMOVE</a></li>
				</ul></li>
				
			<li class="active"><a href="#">SUPPLIER</a>
			<ul class="submenu">
					<li><a href="Supplier.php">ADD</a></li>
					<li><a href="viewSupplier.php">VIEW</a></li>
					
					<li><a href="updateSupplier.php">UPDATE</a></li>
					<li><a href="removeSupplier.php">REMOVE</a></li>
				</ul></li>
		</ul>
	</div>
	
	<!--<div class="result">
	
	</div>-->
</body>
	
</html>