<!DOCTYPE html>


<html>
<head>
    <title>admin</title>

    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../../jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>
    <style>
        .errorMsg  {
            display:none;
            background: red;
            font-size:12px;
            width: auto;
            color: #000000;
            z-index: 99;
            border: 2px solid white;
            /* for IE */
            /* CSS3 standard */
        }
    </style>


</head>

<body>
<div class="modal fade" id="showOptions" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Following Drugs are Available</h4>
            </div>
            <div class="modal-body">
                <div class="fixed-table-container">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Select</th>
                                <th>#Stock No</th>
                                <th>Brand Name</th>
                                <th>Dosage Form</th>
                                <th>Remaining Quantity</th>
                                <th>Expiration Date</th>
                                <th>Unit Price</th>
                            </tr>
                            </thead>
                            <tbody id="tableOptions">

                            </tbody>
                        </table>
                        <div class="col-md-12 text-center">
                            <ul class="pagination pagination-lg pager" id="myPager"></ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div class="container" style="margin-left:10px;">
    <h3>Billing Items</h3>
    <div class="fixed-table-toolbar">
        <div class="bs-bars pull-left">
            <div id="toolbar">
                <button id="addItem" onclick="addOp()" class="btn btn-success" >
                    <i class="glyphicon glyphicon-plus"></i> Add
                </button>
                <button id="editItem" onclick="editOp()" class="btn btn-default" disabled="">
                    <i class="glyphicon glyphicon-edit"></i> Edit
                </button>
                <button id="removeItem" onclick="deleteOp()" class="btn btn-danger" disabled="">
                    <i class="glyphicon glyphicon-remove"></i> Delete
                </button>
            </div>
        </div>
        <div class="pull-right search">
            <input id="searchBox" class="form-control" type="text" placeholder="Search Items">
        </div>

    </div>
    <br>
    <div class="fixed-table-container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Select</th>
                    <th>#Item No</th>
                    <th>Brand Name</th>
                    <th>Dosage Form</th>
                    <th>Quantity</th>
                    <th>Expiration Date</th>
                    <th>Unit Price</th>
                    <th>Price</th>
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
    var addBtn = document.getElementById('addItem');
    var deleteBtn = document.getElementById('removeItem');
    var editBtn = document.getElementById('editItem');
    var maxNo = 0;
    var checkedBoxes = [];

    $( document ).ready(function() {
        maxItemNo();
        $('#myModal').modal('show');
    });

    function maxItemNo(){
        jQuery.ajax({
            type: "POST",
            url: "maxItemNo.php",
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
            $(currentRow).append('<td><button id="addItem" onclick="saveEdit(this,'+rowItem[1]+')" class="btn btn-success" ><i class="glyphicon glyphicon-save"></i> Save </button></td>');
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
        $(table).append('<tr  id="row"'+maxNo+'><td><button id="addItem" onclick="saveEdit(this,'+maxNo+')" class="btn btn-success" ><i class="glyphicon glyphicon-save"></i> Save </button></td>\
          <td><input type="text" value="'+maxNo+'" readonly="true" ></td>\
          <td class="ui-widget"><input class="BrandName" onfocus="autoCompleteBrandNames()" onfocusout="validateBrandName(this)" title="tooltip" type="text"></td>\
          <td class="ui-widget"><input class="DosageForm" onfocus="autoCompleteDosageForms()" onfocusout="validateDosageForm(this)" title="tooltip" type="text"></td>\
          <td class="ui-widget"><input class="Quantity" onfocus="showQtyType(this)" onfocusout=validateQty(this) type="text" title="tooltip" ></td>\
          <td class="ui-widget"><input class="UnitPrice" type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>\
          <td><input type="text"  ></td>');
        $(table).append('</tr>');
        initialize();
    }

    function Search(){
        var searchValue = $('#searchBox').value;

    }

</script>
<script src="../js/pagination.js"></script>
<script>
    var availableBrands = [];
    var DosageForms = [];
    var selectedBrand ="";
    var selectedDosageForm="";
    var QtyType="";

    function getAvailableBrands() {
        availableBrands = [];
        jQuery.ajax({
            type: "POST",
            url: "getBrands.php",
            dataType: 'json',
            data: {},
            complete: function(r){
                    var value = JSON.parse(r.responseText);
                    if(!(value instanceof Array)){
                        availableBrands.push(value);
                    }
                    else{
                        availableBrands = value;
                    }
                }


        });
    }

    function getAvailableDosageForms(brand) {
        DosageForms = [];
        jQuery.ajax({
            type: "POST",
            url: "getDosageForms.php",
            dataType: 'json',
            data: {brand:brand},
            complete: function(r){
                var value = JSON.parse(r.responseText);
                if(!(value instanceof Array)){
                    DosageForms.push(value);
                }
                else{
                    DosageForms = value;
                }
            }
        });
    }
    function getQtyType(brand,form) {
        jQuery.ajax({
            type: "POST",
            url: "getQtyType.php",
            dataType: 'json',
            data: {brand:brand,dosageForm:form},
            complete: function(r){
                if (r.responseText.length > 1){
                    QtyType = r.responseText;
                }
                else{
                }
            }
        });
    }

    function initialize(){
        getAvailableBrands();
    }

    // autoComplete Data retrieval from database
    function autoCompleteBrandNames(){
        $('.BrandName').each(function(i, obj) {
            $(obj).autocomplete({
                source: availableBrands
            });
        });
    }

    function autoCompleteDosageForms(){
        $('.DosageForm').each(function(i, obj) {
            $(obj).autocomplete({
                source: DosageForms
            });
        });
    }

    //Brand Name validation
    function  validateBrandName(input) {
        if (!contains.call(availableBrands,input.value)){
            input.style.background = "#FFBDB7";
            $(input).tooltip({
                content: "Invalid Brand Name",
                tooltipClass: "errorMsg"
            });
        }

        else{
            input.style.background = "#FFF";
            $(input).tooltip({
                disabled: true
            });
            selectedBrand = input.value;
            getAvailableDosageForms(selectedBrand);
        }

    }

    // Dosage Form validation based on the value of the selected
    function  validateDosageForm(input) {
        console.log(input.value);
        console.log(DosageForms);
        if (!contains.call(DosageForms,input.value)){
            input.style.background = "#FFBDB7";
            $(input).tooltip({
                content: "Invalid Dosage Form",
                tooltipClass: "errorMsg"
            });
        }

        else{
            input.style.background = "#FFF";
            $(input).tooltip({
                disabled: true
            });
            selectedDosageForm = input.value;
            getQtyType(selectedBrand,selectedDosageForm);
        }

    }

    // Function to show quantity types
    function showQtyType(input) {
        $(input).tooltip({
            content: QtyType,
        });
    }
    // Validate Quantity, if the required quanity is not available alert the user
    //If the drug is allergic to customer alternatives should be shown

    function validateQty(input){
        //First get the drug if it's available sorted according to drugs that are close to expire but
        // at least have 30 days to expire
        // if it's less than 90 days issue a warning
        var matchingDrugs;
        jQuery.ajax({
            type: "POST",
            url: "getDrug.php",
            dataType: 'json',
            data: {brand:selectedBrand,dosageForm:selectedDosageForm,quantity:input.value},
            complete: function(r){
                if (r.responseText.length > 1){
                    matchingDrugs = r.responseText;
                }
                else{
                }
            }
        });
        $('#tableOptions').html('');
        

    }
    //Array Search function
    var contains = function(needle) {
        // Per spec, the way to identify NaN is that it is not equal to itself
        var findNaN = needle !== needle;
        var indexOf;

        if(!findNaN && typeof Array.prototype.indexOf === 'function') {
            indexOf = Array.prototype.indexOf;
        } else {
            indexOf = function(needle) {
                var i = -1, index = -1;

                for(i = 0; i < this.length; i++) {
                    var item = this[i];

                    if((findNaN && item !== item) || item === needle) {
                        index = i;
                        break;
                    }
                }

                return index;
            };
        }

        return indexOf.call(this, needle) > -1;
    };
</script>
</html>
