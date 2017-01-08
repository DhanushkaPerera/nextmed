<!DOCTYPE html>


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
                        <button id="remove" class="btn btn-success" >
                            <i class="glyphicon glyphicon-plus"></i> Add
                        </button>
                        <button id="remove" class="btn btn-default" disabled="">
                            <i class="glyphicon glyphicon-edit"></i> Edit
                        </button>
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
                            <th>Select</th>
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
                        <tbody id="tablebody">


                        </tbody>
                    </table>
                </div>
            </div>

        </div>
		<div id="Suppliers" class="tab-pane fade">
			<h3>Suppliers</h3>
            <div class="fixed-table-container">
                <div class="table-responsive">
                    <table class="table">
                        <thead id="tableContent">

                        </thead>
                        <tbody>
                        <tr>
                            <td><div class="checkbox">
                                    <label><input type="checkbox" value=""></label>
                                </div>
                            </td>
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
	</div>
</div>

	
	<!--<div class="result">		</div>-->
</body>
<script>
    $( document ).ready(function() {
        var count=10;
        var table = $("#tablebody");
        jQuery.ajax({
            type: "POST",
            url: "loadDrugs.php",
            dataType: 'json',
            data: {count: count},
            complete: function(r){
                if (r.responseText.length > 10){
                   table.html(r.responseText);
                }
                else{
                    table.html("Failed");
                }
            }
        });
    });
</script>
</html>
