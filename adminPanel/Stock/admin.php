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
                        <button id="addDrug" class="btn btn-success" >
                            <i class="glyphicon glyphicon-plus"></i> Add
                        </button>
                        <button id="editDrug" onclick="editOp()" class="btn btn-default" disabled="">
                            <i class="glyphicon glyphicon-edit"></i> Edit
                        </button>
                        <button id="removeDrug" onclick="deleteOp()" class="btn btn-danger" disabled="">
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
                            <th>Expire Date</th>
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
    // Global variables
    var addBtn = document.getElementById('addDrug');
    var deleteBtn = document.getElementById('removeDrug');
    var editBtn = document.getElementById('editDrug');
    var checkedBoxes = [];

    $( document ).ready(function() {
        loadTable();
    });

    function loadTable() {
        var count = 10;
        var table = $("#tablebody");
        table.html("Loading..");
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
    }

    function checkEvent(checkBox){
        if(checkBox.checked){
            checkedEvent(checkBox);
        }
        else{
            uncheckedEvent(checkBox);
        }
    }
    function  checkedEvent(checkBox) {

        checkedBoxes.push(checkBox);

        if(checkedBoxes.length==1){
            deleteBtn.disabled = false;
            editBtn.disabled = false;
        }

    }
    function uncheckedEvent(checkBox) {
        var index = checkedBoxes.indexOf(checkBox);
        checkedBoxes.splice(index,1);
        if(checkedBoxes.length==0){
            deleteBtn.disabled = true;
            editBtn.disabled= true;
        }

    }

    function deleteOp() {
        var length = checkedBoxes.length;
        var step;
        var stockNos = [];
        for(step=0;step<length;step++){
            var item = checkedBoxes[step];
            var stockNo = item.getAttribute('name');
            var index = checkedBoxes.indexOf(item);
            checkedBoxes.splice(index,1);
            length = checkedBoxes.length;
            stockNos.push(stockNo);
            var currentRow = "#row"+stockNo;
        }
        jQuery.ajax({
            type: "POST",
            url: "deleteDrugs.php",
            dataType: 'json',
            data: {stockNos: stockNos},
            complete: function(r){
                if (r.responseText.length > 5){
                    alert(r.responseText);
                }
                else{
                    alert("Delete Failed");
                }
            }
        });
        loadTable();
    }

    function editOp(){
        var length = checkedBoxes.length;
        //alert(length);
        var step;
        var rowItem = {};
        for(step = 0;step<length;step++){
            var item = checkedBoxes[step];
            var id = item.getAttribute('name');
            var index = checkedBoxes.indexOf(item);
            checkedBoxes.splice(index,1);
            length = checkedBoxes.length;
            var currentRow = "#row"+id;
            $(currentRow).has('td').each(function() {
                $('td', $(this)).each(function(index, item) {
                    rowItem[index] = $(item).html();
                });
            });
            $(currentRow).html('');
            $(currentRow).append('<td><button id="addDrug" onclick="saveEdit(this,'+rowItem[1]+')" class="btn btn-success" ><i class="glyphicon glyphicon-save"></i> Save </button></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[1]+'" readonly="true" ></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[2]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[3]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[4]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[5]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[6]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[7]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[8]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[9]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[10]+'"></td>');
        }
    }
    function saveEdit(editBtn,ID) {
        var currentRow = $(editBtn).closest('tr');
        var rowItem = {};
        var index=1;
        $(currentRow).children('td').children('input').each(function () {
            rowItem[index] = this.value;
            index++;
        });

        jQuery.ajax({
            type: "POST",
            url: "saveDrugs.php",
            dataType: 'json',
            data: {oldID:ID, rowItem: rowItem},
            complete: function(r){
                if (r.responseText.length > 1){
                    alert(r.responseText);
                }
                else{
                    table.html("Failed");
                }
            }
        });

        $(currentRow).html('');
        $(currentRow).append('<td><div class="checkbox"><label><input onchange="checkEvent(this)" name="'+ID+'" type="checkbox" value=""></label></div></td></td>');
        $(currentRow).append('<td> '+rowItem[1]+' </td>');
        $(currentRow).append('<td> '+rowItem[2]+' </td>');
        $(currentRow).append('<td> '+rowItem[3]+' </td>');
        $(currentRow).append('<td> '+rowItem[4]+' </td>');
        $(currentRow).append('<td> '+rowItem[5]+' </td>');
        $(currentRow).append('<td> '+rowItem[6]+' </td>');
        $(currentRow).append('<td> '+rowItem[7]+' </td>');
        $(currentRow).append('<td> '+rowItem[8]+' </td>');
        $(currentRow).append('<td> '+rowItem[9]+' </td>');
        $(currentRow).append('<td> '+rowItem[10]+' </td>');
    }

    function addOp() {
        var table = $("#tablebody");
        $(currentRow).html('');
        $(currentRow).append('<td><button id="addDrug" onclick="saveEdit(this,'+rowItem[1]+')" class="btn btn-success" ><i class="glyphicon glyphicon-save"></i> Save </button></td>');
        $(currentRow).append('<td><input type="text" value="'+rowItem[1]+'" readonly="true" ></td>');
        $(currentRow).append('<td><input type="text" value="'+rowItem[2]+'"></td>');
        $(currentRow).append('<td><input type="text" value="'+rowItem[3]+'"></td>');
        $(currentRow).append('<td><input type="text" value="'+rowItem[4]+'"></td>');
        $(currentRow).append('<td><input type="text" value="'+rowItem[5]+'"></td>');
        $(currentRow).append('<td><input type="text" value="'+rowItem[6]+'"></td>');
        $(currentRow).append('<td><input type="text" value="'+rowItem[7]+'"></td>');
        $(currentRow).append('<td><input type="text" value="'+rowItem[8]+'"></td>');
        $(currentRow).append('<td><input type="text" value="'+rowItem[9]+'"></td>');
        $(currentRow).append('<td><input type="text" value="'+rowItem[10]+'"></td>');

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
    }

</script>
</html>
