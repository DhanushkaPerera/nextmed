<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/16/2017
 * Time: 3:10 AM
 */
?>
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

</head>
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

    .ienlarger {
        float: left;
        clear: none; /* set to left or right if needed */
        /* space between thumbs and wrapping text when there is any text around it */
    }

    .ienlarger a {
        display:block;
        text-decoration: none;
        /* add cursor:default; to this rule to disable the hand cursor */
    }

    .ienlarger a:hover{ /* dont move this positioning to normal state */
        position:relative;
    }

    .ienlarger span img {
        border: 1px solid #FFFFFF; /* adds a border around the image */
        margin-bottom: 8px; /* pushes the text down from the image */
    }

    .ienlarger a span {  /* this is for the large image and the caption */
        position: absolute;
        display:none;
        color: #FFCC00; /* caption text colour */
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 13px; /* caption text size */
        background-color: #000000;
        font-weight: bold;
        padding-top: 10px;
        padding-right: 10px;
        padding-bottom: 13px;
        padding-left: 10px;
    }

    .ienlarger img { /* leave or IE puts a border around links */
        border-width: 0;
    }

    .ienlarger a:hover span {
        display:block;
        top: 50px;
        right:30px;
        z-index: 100;


    }

    .resize_thumb {
        width: 90px; /* enter desired thumb width here */
        height : 80px;
    }
    .loader {
        border: 16px solid #f3f3f3; /* Light grey */
        border-top: 16px solid #3498db; /* Blue */
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 10s linear infinite;
    }

    @keyframes spin {
        0% { transform: rotate(0deg); }
        100% { transform: rotate(360deg); }
    }

</style>
<body>
<!-- billing table modals -->
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
                                <th>Discount (Rs.) </th>
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
                <button id="addItemButton" type="button" onclick="setHealthTips()" class="btn btn-primary" disabled="">Add Item</button>
            </div>
        </div>
    </div>
</div>
<!-- end of modals-->
<div class="container" style="margin-left:10px;">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#OnlineOrders">Online Orders</a></li>
        <li><a data-toggle="tab" href="#Bill">Billing</a></li>
    </ul>
    <div style="background-color: transparent" class="tab-content">
        <div id="OnlineOrders" class="tab-pane fade in active">
            <iframe src="bill2.php" style="width:100%;height: 900px;" frameborder=0></iframe>
        </div>
        <div id="Bill" class="tab-pane fade">
            <h3>Bill</h3>
            <div class="container" style="margin-left:10px;">
                <div class="row header">
                    <div class="col-sm-12">
                        <h3>Customer Details</h3>
                        <div class="well">
                            <form class="form-inline" method="post">
                                <div class="form-group">
                                    <label for="email">NIC</label>
                                    <input type="text" class="form-control" name="nic" id="customerNIC" placeholder="935643090V">
                                </div>
                                <button type="button" name="search" class="btn btn-info" onclick="customerInfo()" >Search</button>
                                <div id="customerData">

                                </div>
                            </form>
                            <?php

                            require("../../db/db.php");


                            if(isset($_POST["search"])){


                                $nic = $_POST["nic"];

                                /*$name = $_POST["name"];*/


                                $sql = "select * from customer where NIC='$nic' ";

                                $res = mysqli_query($db,$sql);
                                $count=mysqli_num_rows($res);
                                if ($count>0){

                                    while($row = mysqli_fetch_array($res)){
                                        echo "<p></p><p>Name: ".$row['FName']."</p><p>Gender: ".$row['Gender']."</p>";
                                        session_start();
                                        $_SESSION["CstAllergicDrugs"]=$row['AllergicDrugs'];
                                    }}
                                else{
                                    echo "Not Registered";
                                }

                            }
                            ?>

                        </div>

                    </div>

                </div><!--/row-->
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
                <br>
                <div class="row">

                    <div class="col-sm-7 notice">
                        <div class="well">
                            <h3> Health Tips</h3>
                            <div id="HealthTips">

                            </div>
                        </div>
                    </div><!--/col-->

                    <div class="col-sm-5 recap">
                        <table class="table table-clear">
                            <tbody>
                            <tr>
                                <td class="left"><strong >Subtotal</strong></td>
                                <td align="right" class="right" id="SubTotalPrice" ></td>
                            </tr>
                            <tr>
                                <td class="left"><strong >Discount</strong></td>
                                <td align="right" class="right" id="totalDiscount" ></td>
                            </tr>
                            <tr>
                                <td class="left"><strong>Total</strong></td>
                                <td align="right" class="right" id="totalPrice"><strong></strong></td>
                            </tr>
                            <tr>
                                <td class="left"><strong>Amount Paid</strong></td>
                                <td align="right" class="right"><input onfocusout="calcBalance(this)" style="text-align:right;" type="text"><strong></strong></td>
                            </tr>
                            <tr>
                                <td class="left"><strong>Balance</strong></td>
                                <td align="right" class="right" id="balancePrice"><strong></strong></td>
                            </tr>
                            </tbody>
                        </table>
                        <a class="btn btn-info" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print Bill </a>
                    </div><!--/col-->

                </div><!--/row-->
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
    var checkedBoxes = [];

    $( document ).ready(function() {
        getMaxInvoiceNo();
    });


    function loadTable() {
        var table = $("#tablebody");
        getHealthTips();
        table.html("Loading..");
        jQuery.ajax({
            type: "POST",
            url: "loadItems.php",
            dataType: 'json',
            data: {InvoiceNo:maxInvoiceNo},
            complete: function(r){
                if (r.responseText.length > 10){
                    table.html(r.responseText);
                    $('#tablebody').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:5});
                }
                else{
                    table.html("Failed");
                }
            }
        });
    }

    function checkEvent(checkBox){
        console.log('here');
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
            url: "deleteItem.php",
            dataType: 'json',
            data: {ItemNos: ItemNos,InvoiceNo:maxInvoiceNo},
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
        console.log(UnitPrice);
        console.log(quantity);
        TotalPrice = Number(TotalPrice);
        TotalPrice += Number(UnitPrice * quantity);
        console.log(TotalPrice);
        UnitPrice = parseFloat(Math.round(UnitPrice * 100) / 100).toFixed(2);
        var ItemPrice = UnitPrice * quantity;
        ItemPrice = parseFloat(Math.round(ItemPrice * 100) / 100).toFixed(2);
        TotalDiscount += CurrentDiscount;
        TotalDiscount = parseFloat(Math.round(TotalDiscount * 100) / 100).toFixed(2);

        TotalPrice = parseFloat(Math.round(TotalPrice * 100) / 100).toFixed(2);
        jQuery.ajax({
            type: "POST",
            url: "addItem.php",
            dataType: 'json',

            data: {invoiceNo:maxInvoiceNo,ItemNo:maxItemNo,BrandName:selectedBrand,DosageForm:selectedDosageForm,Quantity:quantity,ExpirationDate:ExpireDate,UnitPrice:UnitPrice,ItemPrice:ItemPrice,Discount:CurrentDiscount,HealthTips:HealthTips},
            complete: function(r){
                console.log(r.responseText);
                if(r.responseText==="Added Successfully") {
                    $(table).append('<tr  id="row"'+maxItemNo+'><td><div class="checkbox"><label><input onchange="checkEvent(this)" name="'+maxItemNo+'" type="checkbox" value=""></label></div></td></td>\
                      <td>'+maxItemNo+'</td>\
                      <td>'+selectedBrand+'</td>\
                      <td>'+selectedDosageForm+'</td>\
                      <td>'+quantity+'</td>\
                      <td>'+ExpireDate+'</td>\
                      <td>'+UnitPrice+'</td>\
                      <td align="right">'+ItemPrice+'</td>');
                    $(table).append('</tr>');
                    $('#SubTotalPrice').html(TotalPrice);
                    $('#totalDiscount').html(TotalDiscount);
                    var FinalTotalPrice = TotalPrice - TotalDiscount;
                    FinalTotalPrice = parseFloat(Math.round(FinalTotalPrice * 100) / 100).toFixed(2);
                    $('#totalPrice').html(FinalTotalPrice);

                    getHealthTips();
                    maxItemNo++;
                }
                else{
                    alert(r.responseText);
                }
                //loadTable();
            }
        });

    }

    function setHealthTips() {
        jQuery.ajax({
            type: "POST",
            url: "getHealthTip.php",
            dataType: 'json',
            data: {BrandName:selectedBrand,DosageForm:selectedDosageForm},
            complete: function(r){
                HealthTips = JSON.parse(r.responseText);
                HealthTips = HealthTips.healthTips;
                addItemtoTable();
            }
        });
    }

    function getHealthTips() {
        jQuery.ajax({
            type: "POST",
            url: "getHealthTips.php",
            dataType: 'json',
            data: {InvoiceNo:maxInvoiceNo},
            complete: function(r){
                $('#HealthTips').html(r.responseText);
            }
        });
    }
    function calcBalance(input) {
        var paid = input.value;
        var balance = paid - (TotalPrice-TotalDiscount);
        balance = parseFloat(Math.round(balance * 100) / 100).toFixed(2);
        $('#balancePrice').html(balance);
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
    var HealthTips = "";
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
    function customerInfo(){
        var NIC = $('#customerNIC').val();
        jQuery.ajax({
            type: "POST",
            url: "getCustomerInfo.php",
            dataType: 'json',
            data: {nic:NIC},
            complete: function(r){
                $('#customerData').html(r.responseText);
            }
        });
    }
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
        $('#addItemButton').prop( "disabled", true );
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
                    $('#showOptionsHeader').css( "background", "none" );
                }
                else if(opt=="2"){
                    $('#showOptionsHeader').html('This Drug is not Available, but following alternatives were found in Stocks');
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
                    $('#showOptionsHeader').css( "background", "none" );
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
                //$('#BrandName-input').val(SelectedBrand);
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