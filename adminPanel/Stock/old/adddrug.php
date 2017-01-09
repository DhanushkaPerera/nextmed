<html>

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../drug.css">
	
</head>

<body>
<div class="page">
<h1>Register a New Drug </h1> 
	<div class="main">
	
<form id = "drugs" name="insertdrug"  action=""  method=post ><br>

	<div style="width:100%;text-align:center;">
    
	</div>
	<div class="sep"></div>

<div class = "inputs">

	<div class="headingbox" id="hBoxBN" > Genetic Name </div>
	<div style="width:100%;text-align:center;">
    <input type="text" placeholder="Genetic Name"  onfocus="headingBoxActive('hBoxBN')" onfocusout="headingBoxInactive('hBoxBN')"   name=GeneticName /></br>
	</div>
	
	<div class="headingbox" id="hBoxDBN" > Drug Brand Name </div>
	<div style="width:100%;text-align:center;">
    <input type="text" placeholder="Drug Brand Name"  onfocus="headingBoxActive('hBoxDBN')" onfocusout="headingBoxInactive('hBoxDBN')"   name=DrugBrandName /></br>
	</div>


	<div class="headingbox" id="hBoxDA" > Drug Alternatives </div>
	<div style="width:100%;text-align:center;">
    <input type="text" placeholder="Drug Alternatives" onfocus="headingBoxActive('hBoxDA')" onfocusout="headingBoxInactive('hBoxDA')" name=DrugAlternatives ></br>
	</div>
	
	
	<div class="headingbox" id="hBoxCOM" > Composition </div>
	<div style="width:100%;text-align:center;">
    <input type="text" placeholder="Composition" onfocus="headingBoxActive('hBoxCOM')" onfocusout="headingBoxInactive('hBoxCOM')"  name=Compositions /><br>
	</div>
	

	<div class="headingbox" id="hBoxDF"> Dosage Form </div>
	<div style="width:100%;text-align:center;">
	<select name=DosageForm  onfocus="headingBoxActive('hBoxDF')" onfocusout="headingBoxInactive('hBoxDF')" >
	<option value="" disabled selected > Dosage Form </option>
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
	<option value="Eye drops">Eye drops</option>
	</select>
	</div>
	
	<div class="headingbox" id="hBoxDose" > Dose per Person </div>
	<div style="width:100%;text-align:center;">
    <input type="text" placeholder="Dose per Person" onfocus="headingBoxActive('hBoxDose')" onfocusout="headingBoxInactive('hBoxDose')"  name=DosePerPerson /><br>
	</div>
	

	<div class="headingbox" id="hBoxSTR"> Strength </div>
	<div style="width:100%;text-align:center;">
	<select name=Strength  onfocus="headingBoxActive('hBoxSTR')" onfocusout="headingBoxInactive('hBoxSTR')" >
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
	
	
	<div class="headingbox" id="hBoxHT" > Healthtips </div>
	<div style="width:100%;text-align:center;">
    <input type="text" placeholder="Healthtips" name=healthTips onfocus="headingBoxActive('hBoxHT')" onfocusout="headingBoxInactive('hBoxHT')"  /><br>
	</div>
	

	<div class="headingbox" id="hBoxSTO" > Storage </div>
	<div style="width:100%;text-align:center;">
    <input type="text" placeholder="Storage" name=storage onfocus="headingBoxActive('hBoxSTO')" onfocusout="headingBoxInactive('hBoxSTO')" ></br>
	</div>
	

	<div class="headingbox" id="hBoxALCON" > Allergic Conditions </div>
	<div style="width:100%;text-align:center;">
    <input type="text" placeholder="Allergic Conditions" name=allergicConditions onfocus="headingBoxActive('hBoxALCON')" onfocusout="headingBoxInactive('hBoxALCON')"  /><br>
	</div>


	<div class="headingbox" id="hBoxSUPP"> Supplier </div>
	<div style="width:100%;text-align:center;">
	<select name=Supplier onfocus="headingBoxActive('hBoxSUPP')" onfocusout="headingBoxInactive('hBoxSUPP')"  >
	<option value="" disabled selected  > Supplier </option>
	<option value="php code to get suppliers">php code to get suppliers</option>
	<option value="al1">al1</option>
	<option value="al2">al2</option>
	<option value="al3">al3</option>
	<option value="al4">al4</option>
	</select>
	</div>
	

	<div class="headingbox" id="hBoxQUN"> Quantity </div>
	<div style="width:100%;text-align:center;">
	<input type="text" placeholder="Quantity" maxlength=100;  name=Quantity onfocus="headingBoxActive('hBoxQUN')" onfocusout="headingBoxInactive('hBoxQUN')" /><br>
	</div>

	
	<div class="headingbox" id="hBoxMdate" > Manufactured Date  </div>
	<div style="width:100%;text-align:center;">
	<input name=ManufacturedDate type="date" onfocus="headingBoxActive('hBoxMdate')" onfocusout="headingBoxInactive('hBoxMdate')"></br>
	</div>
	

	<div class="headingbox" id="hBoxEXdate" > Expiry Date  </div>
	<div style="width:100%;text-align:center;">
	<input name=ExpDate  placeholder="Expiry Date" type="date" onfocus="headingBoxActive('hBoxEXdate')" onfocusout="headingBoxInactive('hBoxEXdate')" ><br>
	</div>
	

	<div class="headingbox" id="hBoxOP"> Ordered Price </div>
	<div style="width:100%;text-align:center;">
	<input type="text" placeholder="Ordered Price" maxlength=10; name=OrderedPrice onfocus="headingBoxActive('hBoxOP')" onfocusout="headingBoxInactive('hBoxOP')" ></br>
	</div>


	<div class="headingbox" id="hBoxPRO"> Profit% </div>
	<div style="width:100%;text-align:center;">
	<input type="text" placeholder="Profit%" maxlength=10; name=Profit  onfocus="headingBoxActive('hBoxPRO')" onfocusout="headingBoxInactive('hBoxPRO')" ></br>
	</div>


	<div class="headingbox" id="hBoxRETAIL"> Retail Price </div>
	<div style="width:100%;text-align:center;">
	<input type="text" placeholder="Retail Price" maxlength=10; name=RetailPrice onfocus="headingBoxActive('hBoxRETAIL')" onfocusout="headingBoxInactive('hBoxRETAIL')" ></br>
	</div>

	<div class="headingbox" id="hBoxREPO"> Return Policy </div>
	<div style="width:100%;text-align:center;">
	<input type=radio name=ReturnPolicy value=1 onfocus="headingBoxActive('hBoxREPO')" onfocusout="headingBoxInactive('hBoxREPO')"/>1     <input type=radio name=ReturnPolicy value=0 onfocus="headingBoxActive('hBoxREPO')" onfocusout="headingBoxInactive('hBoxREPO')" />0<br>
	</div>


	<div class="headingbox" id="hBoxDIS"> Discount </div>
	<div style="width:100%;text-align:center;">
	<input type="text" placeholder="Discount" maxlength=10;  name=Discount onfocus="headingBoxActive('hBoxDIS')" onfocusout="headingBoxInactive('hBoxDIS')" /><br>
	</div>
	
	<div class="headingbox" id="hBoxDis" > Discounted Price </div>
	<div style="width:100%;text-align:center;">
    <input type="text" placeholder="Discounted Price" onfocus="headingBoxActive('hBoxDis')" onfocusout="headingBoxInactive('hBoxDis')"  name=DiscountedPrice /><br>
	</div>

	<div style="width:100%;text-align:center;">
	<input class="buttonSub"  type="submit" name=submit value=SUBMIT   />
	<input class="buttonCan"  type="reset" name=cancel value=CANCEL   />
	</div>
	
	
	
</div>
</form>
<?php
	//1.Create Database Connection
	if(isset($_POST["submit"])){
	
require("../db/db.php");
	
	//3.Perform Database Query
	
	$sql = "INSERT INTO drug (DrugBrandName , DrugAlternatives,Compositions,DosageForm,Strength,healthTips,storage,allergicConditions,Supplier,Quantity,ManufacturedDate,ExpDate,OrderedPrice,Profit,RetailPrice,ReturnPolicy,Discount) 
	VALUES (
	'$_POST[GeneticName]' ,
	'$_POST[DrugBrandName]' ,
	'$_POST[DrugAlternatives]',
	'$_POST[Compositions]',
	'$_POST[DosageForm]',
	'$_POST[Strength]',
	'$_POST[healthTips]',
	'$_POST[storage]',
	'$_POST[allergicConditions]',
	'$_POST[Supplier]',
	'$_POST[Quantity]',
	'$_POST[ManufacturedDate]',
	'$_POST[ExpDate]',
	'$_POST[OrderedPrice]',
	'$_POST[Profit]',
	'$_POST[RetailPrice]',
	'$_POST[ReturnPolicy]',
	'$_POST[Discount]') ";
	
	
	//4.User Returned Database
	if(!mysql_query($sql , $db)){
		die("Error Query" .mysql_error());	
	}else{
	echo "<div class='ech' ><h6> Successfully Added </h6></div> ";
	}
	
	// 5.Close Connection
	mysql_close($db);
	}
	
?>
</div>
<INPUT Type="BUTTON" name="back" class="back" Value="X" Onclick="window.location.href='../admin.php'">
</div>
</body>
<script>
   function headingBoxActive(box){
	var element = document.getElementById(box);
	element.style.background =  "#0099cc";
	element.style.color = "white";
   }
   
   function headingBoxInactive(box){
	var element = document.getElementById(box);
	element.style.background =  "white";
	element.style.color = "black";
   }

</script>
</html>	

