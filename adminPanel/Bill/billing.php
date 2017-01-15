<!DOCTYPE html>


<!DOCTYPE html>


<html>
<head>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../../jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
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
<div class="container" id="processing" style="margin-left:10px;">
    <h3 id="header">Online Orders</h3>
    <?php
    require("../../db/db.php");
    $sql="SELECT * FROM `order` ";
    $result=mysqli_query($db,$sql);
    echo "
<form method='POST'><table class='table table-striped table-responsive'>
    <thead>
    <tr>
        <th class='center'>Order No</th>
        <th text-align='center'>NIC</th>
        <th>Delivery/Pickup</th>
        <th class='center'>Expect Time</th>
        <th class='center'>Telephone No</th>
        <th class='center'>Copy1</th>
		<th class='center'>Copy2</th>
		<th class='center'>Copy3</th>
    </tr>
    </thead>";

    while($row=mysqli_fetch_array($result))
    {
        echo"
	
	
    <tr id='rowNum".$row['OrderNo.']."'>
	<td >".$row['OrderNo.']."</td>
	<td >".$row['NIC']."</td>
	<td >".$row['DP']."</td>
	<td >".$row['DPTime']."</td>
	<td >".$row['Telephone']."</td>";

        echo"<td  height=50px>";



        echo'<div class="ienlarger"><a href=../ordering/'.( $row['Image1'] ).'><img src="../ordering/' .$row['Image1']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="../ordering/' .$row['Image1']. '" alt="large" height=300 width=300 /><br />
    Copy-1</span></a></div>';

        echo "<br>";
        echo"</td>";

        echo"<td align=center >";


        if($row['Image2']=="No copy"){
            echo "No copy";
        }
        else{

            echo'<div class="ienlarger"><a href=../ordering/'.( $row['Image2'] ).'><img src="../ordering/' .$row['Image2']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="../ordering/' .$row['Image2']. '" alt="large" height=300 width=300 /><br />
    Copy-2</span></a></div>';

        }



        echo "<br>";
        echo"</td>";
        echo"<td align=center >";


        if($row['Image3']=="No copy"){
            echo "No copy";
        }
        else{

            echo'<div class="ienlarger"><a href=../ordering/'.( $row['Image3'] ).'><img src="../ordering/' .$row['Image3']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="../ordering/' .$row['Image3']. '" alt="large" height=300 width=300 /><br />
    Copy-3</span></a></div>';

        }

echo "<br>";
 echo"</td>";
       
	   echo "<td align=center>";
		
		 echo "<td align=center>";
    
echo "<a href='transfer.php?del=";
echo $row['OrderNo.'];
echo "'><input type='button' class='button' value='Process order'></a>"; //Transfer0
echo "<br>";
echo"</td>";
    echo "</tr>";
    
    


    
   } 



    

    echo"</table>";
	echo  "
 <a href='completedorders.php'>
 <button  type='button' name='processorder' class='btn btn-success' >Completed orders</button>
  </a>
   
    <button  type='button' name='processorder' class='btn btn-success' onclick=window.open('report.php') >View report</button>
  <button  type='button' name='processorder' class='btn btn-success'  onclick=window.open('graph.php') >View chart</button>
   
    </div>";
        
echo"</form>";



    ?>
    <script>

        function  loading(button) {
            $(button).html('<div class="loader"></div>');
        }
    </script>

</div>
<div class="container" style="margin-left:10px;">

    <div class="row header">


        <!--div class="col-sm-12">
            <div class="well">
                <h2>Customer Details</h2>
                <div>


                <div class="col-sm-4">

                NIC
                <input type="text" placeholder="920290505v" class="form-control"   maxlength="13" name=nic onfocus="headingBoxActive('hBoxNIC')" onkeyup="validateNIC(this)" autofocus onfocusout="upperCASE(this);hide('NICerror');validateoutNIC(this);validatedAll();" />
                </div>
                <input class="btnSearch"  type="submit" name=search value=SEARCH id="searchButton" ><br>
                </div>
            </div>
        </div--><!--/col-->
        <div class="col-sm-12">
            <h3>Customer Details</h3>
            <div class="well">
                <form class="form-inline" method="post">
                    <div class="form-group">
                        <label for="email">NIC</label>
                        <input type="text" class="form-control" name="nic" id="email" placeholder="935643090V">
                    </div>

                    <button type="submit" name="search" class="btn btn-info" >Search</button>
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

<div class="modal fade" id="showOptionsModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">This Drug is Available in following Stocks</h4>
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
                                <input disabled class="form-control Quantity" onfocus="showQtyType(this)" onfocusout=validateQty(this) type="text" title="tooltip" id="Quantity-input">
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
                <button id="addItemButton" type="button" onclick="addItemtoTable()" class="btn btn-primary" disabled="">addItem</button>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-left:10px;">
    <h3>Billing Items</h3>
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
                    <th>Unit Price</th>
                    <th>Item Price</th>
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
            <h3> Healthtips</h3>

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
                <td class="left"><strong id="SubTotalPrice" >Subtotal</strong></td>
                <td class="right"></td>
            </tr>
            <tr>
                <td class="left"><strong id="totalDiscount" >Discount</strong></td>
                <td class="right"></td>
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
        maxItemNo();
        $('#myModal').modal('show');
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
        var drugNos = [];
        for(step=0;step<length;step++){
            var item = checkedBoxes[step];
            var stockNo = item.getAttribute('name');
            var index = checkedBoxes.indexOf(item);
            checkedBoxes.splice(index,1);
            length = checkedBoxes.length;
            drugNos.push(stockNo);
        }
        jQuery.ajax({
            type: "POST",
            url: "deleteItems.php",
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




    function addItemtoTable() {
        $('#addItemModal').modal('hide');
        var table = $("#tablebody");
        var ItemPrice = UnitPrice * quantity;
        $(table).append('<tr  id="row"'+maxNo+'><td><div class="checkbox"><label><input onchange="checkEventSup(this)" name=s"'+maxNo+'" type="checkbox" value=""></label></div></td></td>\
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
            data: {ItemNo:maxNo,BrandName:selectedBrand,DosageForm:selectedDosageForm,Quantity:quantity,ExpirationDate:ExpireDate,UnitPrice:UnitPrice,ItemPrice:ItemPrice},
            complete: function(r){
                alert(r.responseText);
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
    var maxNo = 0;
    var TotalPrice = 0;
    var TotalDiscount =0;
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
        maxItemNo();
        maxNo++;

        getAvailableBrands();
        $('#BrandName-input').css( "background", "white" );
        $('#ItemNo-input').val(maxNo);
        $('#addItemModal').modal('show');
    }

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
        console.log(availableBrands);
        $('#BrandName-input').autocomplete({
            source: availableBrands
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
            $('#DosageForm-input').prop( "disabled", false );
            $('#DosageForm-input').css( "background", "white" );
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

    function validateQty(input){
        //First get the drug if it's available sorted according to drugs that are close to expire but
        // at least have 30 days to expire
        // if it's less than 90 days issue a warning
        quantity = input.value;
        var matchingDrugs=[];
        jQuery.ajax({
            type: "POST",
            url: "getDrug.php",
            dataType: 'json',
            data: {brand:selectedBrand,dosageForm:selectedDosageForm,quantity:quantity},
            complete: function(r){
                matchingDrugs = r.responseText;
                $('#tableOptions').html(matchingDrugs);
            },
        });
        console.log(matchingDrugs);
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
                TotalPrice += UnitPrice;
                TotalDiscount += data.Discount;
                $('#SubTotalPrice').html(TotalPrice);
                $('#totalDiscount').html(TotalDiscount);
                $('#ExpireDate-input').val(ExpireDate);
                $('#UnitPrice-input').val(UnitPrice);
                $('#showOptionsModal').modal('hide');
                $('#addItemButton').prop( "disabled", false );
            }
        });
        $('#showOptionsModalBody').html('Loading..');

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
    
  
 