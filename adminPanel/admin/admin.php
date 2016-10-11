<!DOCTYPE html>
<html >
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
</html>
