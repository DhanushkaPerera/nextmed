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

<div class="container" style="margin-left:10px;width:98%;">
    <h3>Drugs</h3>
    <div class="fixed-table-toolbar">
        <div class="col-sm-6">
            <div id="toolbar">
                <button id="addDrug" onclick="addOp()" class="btn btn-success" >
                    <i class="glyphicon glyphicon-plus"></i> Add
                </button>
                <button id="editDrug" onclick="editOp()" class="btn btn-info" disabled="">
                    <i class="glyphicon glyphicon-edit"></i> Edit
                </button>
                <button id="removeDrug" onclick="deleteOp()" class="btn btn-danger" disabled="">
                    <i class="glyphicon glyphicon-trash"></i> Delete
                </button>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="input-group">
                <input id="searchInputDrug" type="text" class="form-control" placeholder="Brand Name">
                <span class="input-group-addon" style="padding: 0"></span>
                <input style="display: none" id="searchInputDosage" type="text" class="form-control" placeholder="Dosage Form">
                <span style="display: none;padding: 0" id="searchInputDosageSplit" class="input-group-addon" ></span>
                <select onchange="selectedSearchMethod(this)" id="searchOption" class="selectpicker form-control" data-live-search="true" title="Please select a search method">
                    <option value="brand" >Brand Name</option>
                    <option value="gen" >Genetic Name</option>
                    <option value="alt" >Alternatives</option>
                </select>
                <span class="input-group-btn">
                    <button onclick="SearchDrugs()" class="btn btn-secondary" type="button"><i class="glyphicon glyphicon-search"></i></button>
                </span>
            </div>
        </div>
    </div>
    <br>
    <br>
    <div class="fixed-table-container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Select</th>
                    <th>Drug No</th>
                    <th>Genetic Name</th>
                    <th>Brand Name</th>
                    <th>Dosage Form</th>
                    <th>Alternatives</th>
                    <th>Compositions</th>
                    <th>Dose Per Person</th>
                    <th>Strength</th>
                    <th>Health Tips</th>
                    <th>Storage</th>
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
        maxDrugNo();

    });

    function maxDrugNo(){
        jQuery.ajax({
            type: "POST",
            url: "maxDrugNo.php",
            dataType: 'json',
            data: {},
            complete: function(r){
                maxNo = r.responseText;
            }
        });
    }

    function loadTable() {
        var count = 10;
        var table = $("#tablebody");
        table.html("Loading..");
        jQuery.ajax({
            type: "POST",
            url: "retrieveDrugs.php",
            dataType: 'json',
            data: {count: count},
            complete: function(r){
                if (r.responseText.length > 10){
                    table.html(r.responseText);
                    $('#myPager').html('');
                    $('#tablebody').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:4});
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
        var drugNos = [];
        for(step=0;step<length;step++){
            var item = checkedBoxes[step];
            var stockNo = item.getAttribute('name');
            var index = checkedBoxes.indexOf(item);
            checkedBoxes.splice(index,1);
            length = checkedBoxes.length;
            drugNos.push(stockNo);
            var currentRow = "#row"+stockNo;
        }
        jQuery.ajax({
            type: "POST",
            url: "deleteDrugs.php",
            dataType: 'json',
            data: {drugNos: drugNos},
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
            $(currentRow).append('<td style="text-align: center" "><button id="addDrug" onclick="saveEdit(this,'+rowItem[1]+')" class="btn btn-success btn-sm" ><i class="glyphicon glyphicon-save"></i> Save </button>' +
                '<br><br><button onclick="loadTable()" class="btn btn-danger btn-sm" ><i class="glyphicon glyphicon-remove"></i> Cancel </button>' +
                '</td>');
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
        $(currentRow).append('<td>'+rowItem[1]+'</td>');
        $(currentRow).append('<td>'+rowItem[2]+'</td>');
        $(currentRow).append('<td>'+rowItem[3]+'</td>');
        $(currentRow).append('<td>'+rowItem[4]+'</td>');
        $(currentRow).append('<td>'+rowItem[5]+'</td>');
        $(currentRow).append('<td>'+rowItem[6]+'</td>');
        $(currentRow).append('<td>'+rowItem[7]+'</td>');
        $(currentRow).append('<td>'+rowItem[8]+'</td>');
        $(currentRow).append('<td>'+rowItem[9]+'</td>');
        $(currentRow).append('<td>'+rowItem[10]+'</td>');
    }

    function addOp() {
        var table = $("#tablebody");
        maxNo++;
        $(table).append('<td style="text-align: center" "><button id="addDrug" onclick="saveEdit(this,'+maxNo+')" class="btn btn-success btn-sm" ><i class="glyphicon glyphicon-save"></i> Save </button>\
        <br><br><button onclick="loadTable()" class="btn btn-danger btn-sm" ><i class="glyphicon glyphicon-remove"></i> Cancel </button></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>');
        $(table).append('</tr>');
    }
    function selectedSearchMethod(input) {

        if(input.value=="alt"){
            $('#searchInputDosageSplit').show();
            $('#searchInputDosage').show();
            $('#searchInputDrug').prop("placeholder","Brand Name");
        }
        else{
            $('#searchInputDosageSplit').hide();
            $('#searchInputDosage').hide();
            if(input.value=="brand"){
                $('#searchInputDrug').prop("placeholder","Brand Name");
            }
            else{
                $('#searchInputDrug').prop("placeholder","Genetic Name");
            }
        }
    }
    function SearchDrugs(){
        var searchValue = $('#searchInputDrug').val();
        var searchOption = $('#searchOption').val();
        var dosageForm = $('#searchInputDosage').val();
        var table = $("#tablebody");
        table.html("Loading..");
        jQuery.ajax({
            type: "POST",
            url: "searchDrugs.php",
            dataType: 'json',
            data: {search:searchValue,searchOption:searchOption,dosageForm:dosageForm},
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

    //table pagination

</script>
<script src="../js/pagination.js"></script>
</html>
