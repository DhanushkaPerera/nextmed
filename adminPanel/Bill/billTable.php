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
    <h3>Drugs</h3>
    <div class="fixed-table-toolbar">
        <div class="bs-bars pull-left">
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
            </div>
        </div>
        <div class="pull-right search">
            <input id="searchBox" class="form-control" type="text" placeholder="Search Drugs">
        </div>

    </div>
    <br>
    <div class="fixed-table-container">
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>Select</th>
                    <th>#Drug No</th>
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
        $(table).append('<tr id="row"'+maxNo+'><td><button id="addDrug" onclick="saveEdit(this,'+maxNo+')" class="btn btn-success" ><i class="glyphicon glyphicon-save"></i> Save </button></td>\
          <td><input type="text" value="'+maxNo+'" readonly="true" ></td>\
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

    function Search(){
        var searchValue = $('#searchBox').value;

    }

    //table pagination
    $.fn.pageMe = function(opts){
        var $this = this,
            defaults = {
                perPage: 7,
                showPrevNext: false,
                hidePageNumbers: false
            },
            settings = $.extend(defaults, opts);

        var listElement = $this;
        var perPage = settings.perPage;
        var children = listElement.children();
        var pager = $('.pager');

        if (typeof settings.childSelector!="undefined") {
            children = listElement.find(settings.childSelector);
        }

        if (typeof settings.pagerSelector!="undefined") {
            pager = $(settings.pagerSelector);
        }

        var numItems = children.size();
        var numPages = Math.ceil(numItems/perPage);

        pager.data("curr",0);

        if (settings.showPrevNext){
            $('<li><a href="#" class="prev_link">«</a></li>').appendTo(pager);
        }

        var curr = 0;
        while(numPages > curr && (settings.hidePageNumbers==false)){
            $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
            curr++;
        }

        if (settings.showPrevNext){
            $('<li><a href="#" class="next_link">»</a></li>').appendTo(pager);
        }

        pager.find('.page_link:first').addClass('active');
        pager.find('.prev_link').hide();
        if (numPages<=1) {
            pager.find('.next_link').hide();
        }
        pager.children().eq(1).addClass("active");

        children.hide();
        children.slice(0, perPage).show();

        pager.find('li .page_link').click(function(){
            var clickedPage = $(this).html().valueOf()-1;
            goTo(clickedPage,perPage);
            return false;
        });
        pager.find('li .prev_link').click(function(){
            previous();
            return false;
        });
        pager.find('li .next_link').click(function(){
            next();
            return false;
        });

        function previous(){
            var goToPage = parseInt(pager.data("curr")) - 1;
            goTo(goToPage);
        }

        function next(){
            goToPage = parseInt(pager.data("curr")) + 1;
            goTo(goToPage);
        }

        function goTo(page){
            var startAt = page * perPage,
                endOn = startAt + perPage;

            children.css('display','none').slice(startAt, endOn).show();

            if (page>=1) {
                pager.find('.prev_link').show();
            }
            else {
                pager.find('.prev_link').hide();
            }

            if (page<(numPages-1)) {
                pager.find('.next_link').show();
            }
            else {
                pager.find('.next_link').hide();
            }

            pager.data("curr",page);
            pager.children().removeClass("active");
            pager.children().eq(page+1).addClass("active");

        }
    };

</script>
</html>
