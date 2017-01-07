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

	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../../jquery/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>

</head>

<body>

<div class="container" style="margin-left:10px;">
	<ul class="nav nav-tabs">
		<li class="active"><a data-toggle="tab" href="#Drugs">Drugs</a></li>
		<li><a data-toggle="tab" href="#Suppliers">Suppliers</a></li>
	</ul>
	<div style="background-color: transparent" class="tab-content">
		<div id="Drugs" class="tab-pane fade in active">
			<h3>Drugs</h3>
            <div class="fixed-table-toolbar">
                <div class="bs-bars pull-left">
                    <div id="toolbar">
                        <button id="remove" class="btn btn-danger" disabled="">
                            <i class="glyphicon glyphicon-remove"></i> Delete
                        </button>
                    </div>
                </div>
                <div class="pull-right search">
                    <input class="form-control" type="text" placeholder="Search">
                </div>

            </div>
            <br>
            <div class="fixed-table-container">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>#Stock No</th>
                            <th>Brand Name</th>
                            <th>Dosage Form</th>
                            <th>Supplier Name</th>
                            <th>Purchase Date</th>
                            <th>Remaining Quantity</th>
                            <th>Ordered Quantity</th>
                            <th>Return Policy</th>
                            <th>Retail Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Anna</td>
                            <td>Pitt</td>
                            <td>35</td>
                            <td>New York</td>
                            <td>USA</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
		<div id="Suppliers" class="tab-pane fade">
			<h3>Suppliers</h3>
			<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
	</div>
</div>

	
	<!--<div class="result">		</div>-->
</body>
	
</html>
