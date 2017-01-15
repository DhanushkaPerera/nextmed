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
            z-index: 111199;
            border: 2px solid white;
            /* for IE */
            /* CSS3 standard */
        }
        .ui-autocomplete {z-index:111199 !important;}
    </style>


</head>

<body>
<div class="modal fade" id="showOptionsModal" tabindex="-1" role="dialog" aria-labelledby="showOptionsHeader">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="showOptionsHeader"></h4>
            </div>
            <div class="modal-body" id="showOptionsModalBody">
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
                                <th>Unit Price (Rs.) </th>
                                <th>Discount</th>
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
                <button id="selectOptionButton" type="button" onclick="selectedOption()" class="btn btn-primary" disabled="">Select Stock</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add Item to the Bill</h4>
            </div>
            <div class="modal-body">
                <div class="container">
                <form>
                    <div class="form-group row">
                        <label for="ItemNo-input" class="col-sm-2 col-form-label">Item No</label>
                        <div class="col-sm-7">
                            <input class="form-control" type="text" id="ItemNo-input" readonly>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="BrandName-input" class="col-sm-2 col-form-label">Brand Name</label>
                        <div class="col-sm-7 ui-widget">
                            <input  class="form-control BrandName" onfocus="autoCompleteBrandNames()" onfocusout="validateBrandName(this)" title="tooltip" type="text" id="BrandName-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="DosageForm-input" class="col-sm-2 col-form-label">Dosage Form</label>
                        <div class="col-sm-7 ui-widget">
                            <input disabled class="form-control DosageForm" onfocus="autoCompleteDosageForms()" onfocusout="validateDosageForm(this)" title="tooltip" type="text" id="DosageForm-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Quantity-input" class="col-sm-2 col-form-label">Quantity</label>
                        <div class="col-sm-7 ui-widget">
                            <input disabled class="form-control Quantity" onfocus="showQtyType(this)" onfocusout=getDrugs(this) type="text" title="tooltip" id="Quantity-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="ExpireDate-input" class="col-sm-2 col-form-label">Expiration Date</label>
                        <div class="col-sm-7 ui-widget">
                            <input disabled class="form-control" type="date" id="ExpireDate-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="UnitPrice-input" class="col-sm-2 col-form-label">Unit Price</label>
                        <div class="col-sm-7 ui-widget">
                            <input disabled class="form-control" type="text" id="UnitPrice-input">
                        </div>
                    </div>
                </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="addItemButton" type="button" onclick="addItemtoTable()" class="btn btn-primary" disabled="">Add Item</button>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-left:10px;">
    <h3>Billing Items</h3>
    <h4>Invoice No: </h4>
    <div class="fixed-table-toolbar">
        <div class="col-sm-9">
            <div id="toolbar">
                <button id="addItem" onclick="addItemOp()" class="btn btn-success" >
                    <i class="glyphicon glyphicon-plus"></i> Add
                </button>
                <button id="removeItem" onclick="deleteOp()" class="btn btn-danger" disabled="">
                    <i class="glyphicon glyphicon-remove"></i> Delete
                </button>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="input-group">
                <input id="searchInputSup" type="text" class="form-control" placeholder="Search for...">
                <span class="input-group-btn">
                                 <button onclick="SearchItems()" class="btn btn-secondary" type="button"><i class="glyphicon glyphicon-search"></i></button>
                        </span>
            </div>
        </div>
        <br>
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
                    <th>Unit Price (Rs.)</th>
                    <th>Item Price (Rs.)</th>
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
<br>
<div class="row">

    <div class="col-lg-4 col-sm-5 notice">
        <div class="well">
            <h3> Health Tips</h3>

            <div class="panel panel-default">
                <div class="panel-heading"><h4>Panadol</h4></div>
                <div class="panel-body">Drink lot of water</div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading"><h4>Panadol</h4></div>
                <div class="panel-body">Drink lot of water</div>
            </div>
        </div>
    </div><!--/col-->

    <div class="col-lg-4 col-lg-offset-4 col-sm-5 col-sm-offset-2 recap">
        <table class="table table-clear">
            <tbody>
            <tr>
                <td class="left"><strong >Subtotal</strong></td>
                <td class="right" id="SubTotalPrice" ></td>
            </tr>
            <tr>
                <td class="left"><strong >Discount</strong></td>
                <td class="right" id="totalDiscount" ></td>
            </tr>
            <tr>
                <td class="left"><strong>Total</strong></td>
                <td class="right"><strong></strong></td>
            </tr>
            </tbody>
        </table>
        <a href="page-invoice.html#" class="btn btn-info" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print Bill </a>
    </div><!--/col-->

</div><!--/row-->

<!--<div class="result">		</div>-->
</body>
<script>
    // Global variables
    var addBtn = document.getElementById('addItem');
    var deleteBtn = document.getElementById('removeItem');
    var checkedBoxes = [];

    $( document ).ready(function() {
        getMaxInvoiceNo();
    });


    function loadTable() {
        var table = $("#tablebody");
        table.html("Loading..");
        jQuery.ajax({
            type: "POST",
            url: "loadItems.php",
            dataType: 'json',
            data: {count: count},
            complete: function(r){
                if (r.responseText.length > 10){
                    table.html(r.responseText);
                    $('#tablebody').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:5});
                    loadTable();
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
        }

    }
    function uncheckedEvent(checkBox) {
        var index = checkedBoxes.indexOf(checkBox);
        checkedBoxes.splice(index,1);
        if(checkedBoxes.length==0){
            deleteBtn.disabled = true;
        }

    }

    function deleteOp() {
        var length = checkedBoxes.length;
        var step;
        var ItemNos = [];
        for(step=0;step<length;step++){
            var item = checkedBoxes[step];
            var itemNo = item.getAttribute('name');
            var index = checkedBoxes.indexOf(item);
            checkedBoxes.splice(index,1);
            length = checkedBoxes.length;
            ItemNos.push(itemNo);
        }
        jQuery.ajax({
            type: "POST",
            url: "deleteItems.php",
            dataType: 'json',
            data: {ItemNos: ItemNos,invoiceNo:maxInvoiceNo},
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




    function addItemtoTable() {
        $('#addItemModal').modal('hide');
        var table = $("#tablebody");
        var ItemPrice = UnitPrice * quantity;
        TotalDiscount += CurrentDiscount;
        TotalPrice +=ItemPrice;
        $(table).append('<tr  id="row"'+maxItemNo+'><td><div class="checkbox"><label><input onchange="checkedEvent(this)" name=s"'+maxItemNo+'" type="checkbox" value=""></label></div></td></td>\
          <td>'+maxItemNo+'</td>\
          <td>'+selectedBrand+'</td>\
          <td>'+selectedDosageForm+'</td>\
          <td>'+quantity+'</td>\
          <td>'+ExpireDate+'</td>\
          <td>'+UnitPrice+'</td>\
          <td>'+ItemPrice+'</td>');
        $(table).append('</tr>');
        jQuery.ajax({
            type: "POST",
            url: "addItem.php",
            dataType: 'json',

            data: {invoiceNo:maxInvoiceNo,ItemNo:maxItemNo,BrandName:selectedBrand,DosageForm:selectedDosageForm,Quantity:quantity,ExpirationDate:ExpireDate,UnitPrice:UnitPrice,ItemPrice:ItemPrice,Discount:CurrentDiscount},
            complete: function(r){
                if(r.responseText==="Added Successfully") {
                    $('#SubTotalPrice').html(TotalPrice);
                    $('#totalDiscount').html(TotalDiscount);
                    maxItemNo++;
                }
                else{
                    alert("Operation Failed");
                }
                    //loadTable();
            }
        });

    }



    function Search(){
        var searchValue = $('#searchBox').val();
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
<script>
    var availableBrands = [];
    var DosageForms = [];
    var selectedBrand ="";
    var selectedDosageForm="";
    var quantity = "";
    var ExpireDate = "";
    var QtyType="";
    var SelectedStock = "";
    var maxItemNo = 1;
    var maxInvoiceNo = 0;
    var TotalPrice = 0;
    var TotalDiscount =0;
    var currentDiscount = 0;
    var customerAllergicDrugs = ['Panadol','Calpol'];
    $('#showOptionsModal').on('hidden.bs.modal', function () {
        $('#addItemModal').css('opacity', 1);
    })

    function addItemOp(){

        availableBrands = [];
        DosageForms = [];
        selectedBrand ="";
        selectedDosageForm="";
        quantity = "";
        UnitPrice = 0;
        ExpireDate = "";
        QtyType="";
        SelectedStock = "";
        $('#BrandName-input').val('');
        $('#DosageForm-input').val('');
        $('#DosageForm-input').prop( "disabled", true );
        $('#BrandName-input').css( "background", "#eee" );
        $('#Quantity-input').val('');
        $('#Quantity-input').prop( "disabled", true);
        $('#Quantity-input').css( "background", "#eee" );
        $('#ExpireDate-input').val('');
        $('#UnitPrice-input').val('');
        getAvailableBrands();
        $('#BrandName-input').css( "background", "white" );
        $('#ItemNo-input').val(maxItemNo);
        $('#addItemModal').modal('show');
    }


    function getMaxInvoiceNo(){
        jQuery.ajax({
            type: "POST",
            url: "maxInvoiceNo.php",
            dataType: 'json',
            data: {},
            complete: function(r){
                maxInvoiceNo = r.responseText;
                maxInvoiceNo++;
            }
        });
    }

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
        //console.log(availableBrands);
        availableBrands = availableBrands.filter( function( item, index, inputArray ) {
            return inputArray.indexOf(item) == index;
        });
            $('#BrandName-input').autocomplete({
                source: availableBrands
            });
    }

    function autoCompleteDosageForms(){
        DosageForms = DosageForms.filter( function( item, index, inputArray ) {
            return inputArray.indexOf(item) == index;
        });
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
            $('#DosageForm-input').prop( "disabled", false );
            $('#DosageForm-input').css( "background", "white" );
        }

    }

    // Dosage Form validation based on the value of the selected
    function  validateDosageForm(input) {
        //console.log(input.value);
        //console.log(DosageForms);
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
            $('#Quantity-input').prop( "disabled", false );
            $('#Quantity-input').css( "background", "white" );
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

    function getDrugs(input){
        //First get the drug if it's available sorted according to drugs that are close to expire but
        // at least have 30 days to expire
        // if it's less than 90 days issue a warning
        quantity = $(input).val();
        var matchingDrugs=[];
        $('#selectOptionButton').prop( "disabled", true );
        jQuery.ajax({
            type: "POST",
            url: "getDrug.php",
            dataType: 'json',
            data: {brand:selectedBrand,dosageForm:selectedDosageForm,quantity:quantity,allergicDrugs:customerAllergicDrugs},
            complete: function(r){
                matchingDrugs = r.responseText;
                //console.log(matchingDrugs.slice(-1));
                $('#tableOptions').html(matchingDrugs.slice(0,-1));
                var opt = matchingDrugs.slice(-1);
                if(opt=="1"){
                    $('#showOptionsHeader').html('This Drug is Available in following Stocks');
                }
                else if(opt=="2"){
                    $('#showOptionsHeader').html('This Drug is not Available, but following alternatives were found in following Stocks');
                    $('#showOptionsHeader').css( "background", "#ffbf00" );

                }
                else if(opt=="3"){
                    $('#showOptionsHeader').html('This Drug is not Available');
                    $('#showOptionsHeader').css( "background", "red" );
                }
            },
        });
        $('#tableOptions').html('Loading');
        $('#showOptionsModal').modal({backdrop: 'static', keyboard: false})
        $('#showOptionsModal').modal('show');
        $('#showOptionsModal').css('opacity', 1);
        $('#showOptionsModal').css('z-index', 100000);
        $('#addItemModal').css('opacity', 0.2);
    }

    function getUserAlternativeDrug(){
        //First get the drug if it's available sorted according to drugs that are close to expire but
        // at least have 30 days to expire
        // if it's less than 90 days issue a warning
        var matchingDrugs=[];
        $('#selectOptionButton').prop( "disabled", true );
        jQuery.ajax({
            type: "POST",
            url: "getDrugAlt.php",
            dataType: 'json',
            data: {brand:selectedBrand,dosageForm:selectedDosageForm,quantity:quantity,allergicDrugs:customerAllergicDrugs},
            complete: function(r){
                matchingDrugs = r.responseText;
                $('#tableOptions').html(matchingDrugs.slice(0,-1));
                var opt = matchingDrugs.slice(-1);
                console.log(opt);
                console.log(matchingDrugs);
                if(opt==1){
                    $('#showOptionsHeader').html('Following Alternatives are available in Stocks');
                }
                else if(opt==2){
                    $('#showOptionsHeader').html('No alternatives were found');
                    $('#showOptionsHeader').css( "background", "red" );
                }
            },
        });
        $('#tableOptions').html('Loading');
        $('#showOptionsModal').modal({backdrop: 'static', keyboard: false})
        $('#showOptionsModal').modal('show');
        $('#showOptionsModal').css('opacity', 1);
        $('#showOptionsModal').css('z-index', 100000);
        $('#addItemModal').css('opacity', 0.2);
    }

    function optionSelect(option){
        var selectOptionButton = document.getElementById('selectOptionButton');
        selectOptionButton.disabled = false;
        $('.optionsDrugs').each(function(i, obj) {
            obj.checked = false;
        });
        option.checked = true;
        SelectedStock = option.getAttribute('name');
    }

    function optionSelectAlt(option){
        var selectOptionButton = document.getElementById('selectOptionButton');
        selectOptionButton.disabled = false;
        $('.optionsDrugs').each(function(i, obj) {
            obj.checked = false;
        });
        option.checked = true;
        SelectedStock = option.getAttribute('name');
        selectedBrand = $('#BrandName'+SelectedStock).html();
        selectedDosageForm = $('#DosageForm'+SelectedStock).html();
        $('#BrandName-input').val(selectedBrand);
        $('#DosageForm-input').val(selectedDosageForm);
    }

    function selectedOption(){
        jQuery.ajax({
            type: "POST",
            url: "getDrugByStockNo.php",
            dataType: 'json',
            data: {StockNo:SelectedStock,quantity:quantity},
            complete: function(r){
                var data =  JSON.parse(r.responseText);
                ExpireDate = data.ExpireDate;
                UnitPrice = data.RetailPrice;
                CurrentDiscount = Number(data.Discount) * quantity;
                $('#ExpireDate-input').val(ExpireDate);
                $('#UnitPrice-input').val(UnitPrice);
                $('#showOptionsModal').modal('hide');
                $('#addItemButton').prop( "disabled", false );
            }
        });
        $('#tableOptions').html('Loading..');

    }
    function cancel(){

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
