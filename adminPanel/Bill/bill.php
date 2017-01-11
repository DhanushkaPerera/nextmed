<html>
<head>
    <script type="text/javascript" src=""></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Billing</title>
    <link rel="stylesheet" type="text/css" href="billnew.css">
	<link rel="stylesheet" type="text/css" href="style.css">
<script src="../../jquery/jquery.min.js"></script>


</head>

<body>
	<div class = "bill">
		<div class = "drugs">
			<form id="customer" name="customer"   method="post" onsubmit="return password()" style="min-width:200px;">
				<div style="width:100%;text-align:center;">
					<h3>Customer Deatils</h3> 
				</div>
			
				<div class="sep"></div>
		
     <div class ="inputs" >
			<div class="column">
			<div class="headingbox" id="hBoxNIC"  > National ID  </div>
			<!--div style="width:100%;text-align:center;"-->
			
			<input type="text" placeholder="920290505v" maxlength="13" name=nic onfocus="headingBoxActive('hBoxNIC')" onkeyup="validateNIC(this)" autofocus onfocusout="upperCASE(this);hide('NICerror');validateoutNIC(this);validatedAll();" />
			</div>
			<div class="column">
			<div class="headingbox" id="hBoxNIC"  > Name  </div>
			<!--div style="width:100%;text-align:center;"-->
			<input type="text" placeholder="Dhanushka Geethmi" maxlength="13" name=name onfocus="headingBoxActive('hBoxNIC')" onkeyup="validateNIC(this)" autofocus onfocusout="upperCASE(this);hide('NICerror');validateoutNIC(this);validatedAll();" />
			</div>
			<!--div class="headingbox" id="hBoxNIC" required > National ID  </div>
			<div style="width:100%;text-align:center;">
			<input type="text" placeholder="920290505v" maxlength="13" name=nic onfocus="headingBoxActive('hBoxNIC')" onkeyup="validateNIC(this)" autofocus onfocusout="upperCASE(this);hide('NICerror');validateoutNIC(this);validatedAll();" /-->
			<div class="column">
			<input class="btnSearch"  type="submit" name=search value=Search  ><br>
			</div>
			</div>
	</form>
	<div>
			
			
			<?php

require("../../db/db.php");


if(isset($_POST["search"])){
	
	
        $nic = $_POST["nic"];
		$name = $_POST["name"];
		
				
		$sql = "select * from customer where NIC='$nic' or FName='$name' or  LName='$name'";

			$res = mysqli_query($db,$sql);
			$count=mysqli_num_rows($res);
			if ($count>0){
			
			while($row = mysqli_fetch_array($res)){
				
			echo "Registered Customer";
			}}
			else{
				echo "Not Registered";
			}
			
			
}



?>
			
			
			
			
		</div>
		</form>
		</div>
		
		
	
	
	<div class = "drugs" >
		<form id="customer" name="drug"  method="post"  style="height:400px;min-width:200px;">
		
		<div style="width:100%;text-align:center;">
            <h3>Purchase Deatils</h3> 
		</div>
		<div class="sep"></div>
			
		<div class ="inputs">
		<div class="column">
		<div class="headingbox" id="hBoxON" > Order No </div>
			<div style="width:100%;text-align:center;">
            <input readonly id=order type="text" value="" autofocus name=orderno onfocus="headingBoxActive('hBoxON')" onkeydown="validateString(this, 'nameerror')" onfocusout="hide('nameerror');validateoutString(this, 'nameerror2');validatedAll();" /><br>
			</div>
			</div>
		<div class="column" style="height:84px;">
			<div class="headingbox" id="hBoxOM"> Order Method </div>
			<div style="width:100%;text-align:center;">
			<input type="radio" onfocus="headingBoxActive('hBoxOM')" autofocus name=ReturnPolicy onfocusout="validatePhoneNo(this, 'returnperror');validatedAll();"/>Online
			<input type="radio" onfocus="headingBoxActive('hBoxOM')" autofocus name=ReturnPolicy onfocusout="validatePhoneNo(this, 'returnperror');validatedAll();"/>General<br>
			</div>
		</div>
		<div class="column" style="height:84px;">
		</div>
		<div class="column">
                    <div class="headingbox" id="hBoxNIC" > Brand Name  </div>
                    <div class="inputboxWrap">
                        <input type="text" placeholder="" maxlength="13" name=brandname onfocus="headingBoxActive('hBoxNIC')" onkeyup="validateNIC(this)"   onfocusout="upperCASE(this);hide('NICerror');validateoutNIC(this);validatedAll();fillDosageForm();" />
                    </div>
                    <div class="poperror" id="NICerror" ></div>
                    <div class="error" id="nicerror2" > error occured </div><br>

                    


                </div>

                <div class="column"  >
                     <!-- user First Name input -->
                    <div class="headingbox" id="hBoxFN" >   Generic Name </div>
                    <div class="inputboxWrap" >
                        <input type="text"   name=genericname onfocus="headingBoxActive('hBoxFN')" onkeydown="validateString(this, 'nameerror')" onfocusout="hide('nameerror');validateoutString(this, 'nameerror2');validatedAll();" /><br>
                    </div>
                    <div class="poperror" id="nameerror" ></div>
                    <div class="error" id="nameerror2" > error occured </div><br>


                    


                </div>
				
				<div class="column" style="height:90px;">
				</div>
				
				<div class="column" >
                    <div class="headingbox" id="hBoxNIC" name=dosageform > Dosage Form </div>
                    <div class="inputboxWrap">
                        <select name=dosageform>
						<!--option value="Capsule">Dosage Form</option>
							<option value="Capsule">Capsule</option>
	<option value="Tablet">Tablet</option>
	<option value="Pill">Pill</option>
	<option value="Syrup">Syrup</option>
	<option value="Cream">Cream</option>
	<option value="Liquid">Liquid</option>
	<option value="Gel">Gel</option>
	<option value="Balm">Balm</option>
	<option value="Lotion">Lotion</option>
	<option value="Ointment">Ointment</option>
	<option value="Ear drops">Ear drops</option>
	<option value="Eye drops">Eye drops</option-->
</select>
						
                    </div>
                    <div class="poperror" id="NICerror" ></div>
                    <div class="error" id="nicerror2" > error occured </div><br>

                    


                </div>
				
				<div class="column">
                    <div class="headingbox" id="hBoxNIC" > Strength </div>
                    <div class="inputboxWrap">
                        <select name=Strength  onfocus="headingBoxActive('hBoxSTR')" onfocusout="headingBoxInactive('hBoxSTR');" >
	<option value="" disabled selected  > Strength </option>
	<option value="10mg">10mg</option>
	<option value="10ml">10ml</option>
	<option value="1spoon">1spoon</option>
	<option value="1drop">1drop</option>
	<option value="1capsule">1capsule</option>
	<option value="1tablet">1tablet</option>
	<option value="1pill">1pill</option>
	</select>
                    </div>
                    <div class="poperror" id="NICerror" ></div>
                    <div class="error" id="nicerror2" > error occured </div><br>

                    


                </div>

                

                <div style="width:100%;text-align:center; " >
                <div class="column2">
				
                
			<input class="btnSearch"  type="submit" name=submit value=Search id="searchButton" disabled onclick="validatedAll();parent.parent.closeIFrame();" >
				          
				<!--button class="btnSearch" onclick="parent.parent.closeIFrame();" > Cancel </button-->
</div>
                </div>

		</div>
		
		<!--div class="headingbox" id="hBoxBRAND" > Brand Name </div>
			<div style="width:100%;text-align:center;">
            <input type="text" autofocus name=brandname onfocus="headingBoxActive('hBoxBRAND')" onkeydown="validateString(this, 'nameerror')" onfocusout="hide('nameerror');validateoutString(this, 'nameerror2');validatedAll();" /><br>
			</div>
			
			
			<div class="headingbox" id="hBoxQUA" > Quantity </div>
			<div style="width:100%;text-align:center;">
            <input type="text" autofocus name=quantity onfocus="headingBoxActive('hBoxQUA')" onkeydown="validateString(this, 'nameerror')" onfocusout="hide('nameerror');validateoutString(this, 'nameerror2');validatedAll();" /><br>
			</div>
			
			<div style="width:100%;text-align:center;">
            <div class="checkboxy" >
				<input class="btnSearch"  type="submit" name=submit value=SUBMIT id="searchButton" >
			</div>
			
		</div-->
						
	</div>
	
	</form>
	</div>

<script>
$( document ).ready(function() {
	/*alert('test');*/
function autoNum(){
		var last = "<?php $sql='select InvoiceNo from invoice where InvoiceNo = (select max(InvoiceNo) from invoice)';
		$res = mysqli_query($db,$sql);
		if(mysqli_num_rows($res)>0){
				while($array = mysqli_fetch_array($res)){
            
		echo $array[0];}}?>";
			/*alert(last*/
		var inputBox = document.getElementById('order');
		var lastnum=Number(last);
		inputBox.value=lastnum+1;

}
autoNum();
});

</script>
<!--script>
function fillDosageForm(){
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


		var optionBox = document.getElementById('dosageform');	
		optionBox.value=dose;


}

function fillStrength(){
	var str = "";
			var optionBox = document.getElementById('Strength');	
			optionBox.value=strength;


}


	
</script-->
<script>

</script>



    

</body>
</html>

