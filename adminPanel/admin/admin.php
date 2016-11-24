<!DOCTYPE html>
<!--html >
  <head>
    <meta charset="UTF-8">
    
        <link rel="stylesheet" href="styles2.css">
    </head>
  <body>
<ul class="tabs">
    <li>
        <input type="radio" name="tabs" id="tab1" checked />
        <label for="tab1">drug</label>
        <div id="tab-content1" class="tab-content">
			<div class="iconD"  onclick="window.location='adddrug.php';"><p>ADD<br>A<br>NEW<br>DRUG</p></div>
			<div class="iconD" onclick="window.location='viewDrugs.php';"><p>VIEW<br>DRUGS</p></div>
			<div class="iconD" onclick="window.location='ExpDrug.php';"><p>DRUGS<br> ABOUT<br> TO<br> EXPIRE</p></div>
			<div class="iconD" onclick="window.location='updatedrug.php';"><p>UPDATE<br>DRUGS</p></div>
			<div class="iconD" onclick="window.location='removedrug.php';"><p>DELETE<br>DRUGS</p></div>
			
        </div>
    </li>
  
    <li>
        <input type="radio" name="tabs" id="tab2" />
        <label for="tab2">supplier</label>
        <div id="tab-content2" class="tab-content">
			<div class="iconD" onclick="window.location='Supplier.php';"><p>ADD<br>A<br>NEW<br>SUPPLIER</p></div>
			<div class="iconD" onclick="window.location='viewSupplier.php';"><p>VIEW<br>SUPPLIER</p></div>
			<div class="iconD" onclick="window.location='updateSupplier.php';"><p>UPDATE<br>SUPPLIER</p></div>
			<div class="iconD" onclick="window.location='removesupplier.php';"><p>DELETE<br>SUPPLIER</div>
          
        </div>
    </li>
</ul>
</body>
</html-->


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
					<li><a href="ExpDrug.php">VIEW CLOSE EXPIER DRUGS</a></li>
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
