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
                <div class="row">
                    <div class=" col-sm-9">
                        <div id="toolbar">
                            <button id="addDrug" onclick="addOp()" class="btn btn-success" >
                                <i class="glyphicon glyphicon-plus"></i> Add
                            </button>
                            <button id="editDrug" onclick="editOp()" class="btn btn-default" disabled="">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </button>
                            <button id="removeDrug" onclick="deleteOp()" class="btn btn-danger" disabled="">
                                <i class="glyphicon glyphicon-remove"></i> Delete
                            </button>
                            <button onclick="loadTable()" class="btn btn-default" type="button" name="refresh" title="Refresh">
                                <i class="glyphicon glyphicon-refresh icon-refresh"></i>
                            </button>
                        </div>

                    </div>


                    <div class=" col-sm-3">
                        <div class="input-group">
                            <input id="searchInputDrug" type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                 <button onclick="SearchDrugs()" class="btn btn-secondary" type="button"><i class="glyphicon glyphicon-search"></i></button>
                        </span>
                        </div>

                    </div>
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
                    <div class="col-md-12 text-center">
                        <ul class="pagination pagination-lg pager" id="myPager"></ul>
                    </div>
                </div>
            </div>

        </div>
		<div id="Suppliers" class="tab-pane fade">
			<h3>Suppliers</h3>
            <div class="fixed-table-toolbar">
                <div class="row">
                    <div class="col-sm-9">
                        <div id="toolbar">
                            <button id="addSup" onclick="addOpSup()" class="btn btn-success" >
                                <i class="glyphicon glyphicon-plus"></i> Add
                            </button>
                            <button id="editSup" onclick="editOpSup()" class="btn btn-default" disabled="">
                                <i class="glyphicon glyphicon-edit"></i> Edit
                            </button>
                            <button id="removeSup" onclick="deleteOpSup()" class="btn btn-danger" disabled="">
                                <i class="glyphicon glyphicon-remove"></i> Delete
                            </button>
                            <button onclick="loadTableSup()" class="btn btn-default" type="button" name="refresh" title="Refresh">
                                <i class="glyphicon glyphicon-refresh icon-refresh"></i>
                            </button>
                        </div>

                    </div>


                    <div class="col-sm-3">
                        <div class="input-group">
                            <input id="searchInputSup" type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                 <button onclick="SearchSup()" class="btn btn-secondary" type="button"><i class="glyphicon glyphicon-search"></i></button>
                        </span>
                        </div>

                    </div>
                </div>
            </div>
            <div class="fixed-table-container">
                <div class="table-responsive">
                    <table class="table">
                        <thead id="tableContent">
                            <tr>
                                <th>Select</th>
                                <th>#Supplier No</th>
                                <th>Company Name</th>
                                <th>Permenant Address</th>
                                <th>Contact No</th>
                                <th>Email Address</th>
                            </tr>
                        </thead>
                        <tbody id="supplierTable">

                        </tbody>
                    </table>
                    <div class="col-md-12 text-center">
                        <ul class="pagination pagination-lg pager" id="myPagerSup"></ul>
                    </div>
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
    var maxNo = 0;
    var checkedBoxes = [];

    $( document ).ready(function() {
        loadTable();
        loadTableSup();
        maxStockNo();
        maxSupplierNo();
    });

    function maxStockNo(){
        jQuery.ajax({
            type: "POST",
            url: "maxStockNo.php",
            dataType: 'json',
            data: {},
            complete: function(r){
                maxNo = r.responseText;
            }
        });
    }

    function loadTable() {
        var table = $("#tablebody");
        table.html("Loading..");
        jQuery.ajax({
            type: "POST",
            url: "loadDrugs.php",
            dataType: 'json',
            data: {},
            complete: function(r){
                if (r.responseText.length > 10){
                    table.html(r.responseText);
                    $('#myPager').html('');
                    $('#tablebody').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:10});
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
        deleteBtnSup.disabled = true;
        editBtnSup.disabled= true;
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
            $(currentRow).append('<td><input type="date" value="'+rowItem[5]+'"></td>');
            $(currentRow).append('<td><input type="date" value="'+rowItem[6]+'"></td>');
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
        maxNo++;
        $(table).append('<tr id="row"'+maxNo+'><td><button id="addDrug" onclick="saveEdit(this,'+maxNo+')" class="btn btn-success" ><i class="glyphicon glyphicon-save"></i> Save </button></td>\
          <td><input type="text" value="'+maxNo+'" readonly="true" ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="date"  ></td>\
          <td><input type="date"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>');
        $(table).append('</tr>');
    }

    //table pagination
    function SearchDrugs() {
        var searchThis = $("#searchInputDrug").val();
        var table = $("#tablebody");
        table.html("Loading..");
        jQuery.ajax({
            type: "POST",
            url: "searchDrugs.php",
            dataType: 'json',
            data: {search:searchThis},
            complete: function(r){
                if (r.responseText.length > 0){
                    table.html(r.responseText);
                    $('#myPagerSup').html('');
                   // $('#tablebody').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:10});
                }
                else{
                    table.html("Failed");
                }
            }
        });
    }

    //Functions for the supplier table
    var addBtnSup = document.getElementById('addSup');
    var deleteBtnSup = document.getElementById('removeSup');
    var editBtnSup = document.getElementById('editSup');
    
    var maxNoSup = 0;
    var checkedBoxesSup = [];

    function maxSupplierNo(){
        jQuery.ajax({
            type: "POST",
            url: "maxSupNo.php",
            dataType: 'json',
            data: {},
            complete: function(r){
                maxNoSup = r.responseText;
            }
        });
    }

    function loadTableSup() {
        var table = $("#supplierTable");
        table.html("Loading..");
        jQuery.ajax({
            type: "POST",
            url: "loadSup.php",
            dataType: 'json',
            data: {},
            complete: function(r){
                if (r.responseText.length > 10){
                    table.html(r.responseText);
                    $('#myPagerSup').html('');
                    $('#supplierTable').pageMe({pagerSelector:'#myPagerSup',showPrevNext:true,hidePageNumbers:false,perPage:10});
                }
                else{
                    table.html("Failed");
                }
            }
        });
    }


    function checkEventSup(checkBox){
        if(checkBox.checked){
            checkedEventSup(checkBox);
        }
        else{
            uncheckedEventSup(checkBox);
        }
    }
    function  checkedEventSup(checkBox) {

        checkedBoxesSup.push(checkBox);

        if(checkedBoxesSup.length==1){
            deleteBtnSup.disabled = false;
            editBtnSup.disabled = false;
        }

    }
    function uncheckedEventSup(checkBox) {
        var index = checkedBoxesSup.indexOf(checkBox);
        checkedBoxesSup.splice(index,1);
        if(checkedBoxesSup.length==0){
            deleteBtnSup.disabled = true;
            editBtnSup.disabled= true;
        }

    }

    function deleteOpSup() {
        var length = checkedBoxesSup.length;
        var step;
        var supNos = [];
        for(step=0;step<length;step++){
            var item = checkedBoxesSup[step];
            var supNo = (item.getAttribute('name')).substring(1);
            var index = checkedBoxesSup.indexOf(item);
            checkedBoxesSup.splice(index,1);
            length = checkedBoxesSup.length;
            stockNos.push(supNo);
            var currentRow = "#row"+supNo;
        }
        jQuery.ajax({
            type: "POST",
            url: "deleteSup.php",
            dataType: 'json',
            data: {supNos: supNos},
            complete: function(r){
                if (r.responseText.length > 5){
                    alert(r.responseText);
                }
                else{
                    alert("Delete Failed");
                }
            }
        });
        loadTableSup();
    }

    function editOpSup(){
        var length = checkedBoxesSup.length;
        deleteBtnSup.disabled = true;
        editBtnSup.disabled= true;
        //alert(length);
        var step;
        var rowItem = {};
        for(step = 0;step<length;step++){
            var item = checkedBoxesSup[step];
            var id = item.getAttribute('name');
            var index = checkedBoxesSup.indexOf(item);
            checkedBoxesSup.splice(index,1);
            length = checkedBoxesSup.length;
            var currentRow = "#row"+id;
            $(currentRow).has('td').each(function() {
                $('td', $(this)).each(function(index, item) {
                    rowItem[index] = $(item).html();
                });
            });
            $(currentRow).html('');
            $(currentRow).append('<td><button onclick="saveEdit(this,'+rowItem[1]+')" class="btn btn-success" ><i class="glyphicon glyphicon-save"></i> Save </button></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[1]+'" readonly="true" ></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[2]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[3]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[4]+'"></td>');
            $(currentRow).append('<td><input type="date" value="'+rowItem[5]+'"></td>');
            $(currentRow).append('<td><input type="date" value="'+rowItem[6]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[7]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[8]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[9]+'"></td>');
            $(currentRow).append('<td><input type="text" value="'+rowItem[10]+'"></td>');
        }
    }
    function saveEditSup(editBtnSup,ID) {
        var currentRow = $(editBtnSup).closest('tr');
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
        $(currentRow).append('<td><div class="checkbox"><label><input onchange="checkEventSup(this)" name=s"'+ID+'" type="checkbox" value=""></label></div></td></td>');
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

    function addOpSup() {
        var table = $("#tablebody");
        maxNoSup++;
        $(table).append('<tr id="rowS"'+maxNoSup+'><td><button id="addDrug" onclick="saveEditSup(this,'+maxNoSup+')" class="btn btn-success" ><i class="glyphicon glyphicon-save"></i> Save </button></td>\
          <td><input type="text" value="'+maxNoSup+'" readonly="true" ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="date"  ></td>\
          <td><input type="date"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>');
        $(table).append('</tr>');
    }

    function SearchSup() {
        var searchThis = $("#searchInputSup").val();
        //console.log(searchThis);
        var table = $("#supplierTable");
        table.html("Loading..");
        jQuery.ajax({
            type: "POST",
            url: "searchSup.php",
            dataType: 'json',
            data: {search:searchThis},
            complete: function(r){
                if (r.responseText.length > 10){
                    table.html(r.responseText);
                    $('#myPagerSup').html('');
                    $('#supplierTable').pageMe({pagerSelector:'#myPagerSup',showPrevNext:true,hidePageNumbers:false,perPage:10});
                }
                else{
                    table.html("Failed");
                }
            }
        });
    }


</script>
<script src="../js/pagination.js"></script>
</html>
