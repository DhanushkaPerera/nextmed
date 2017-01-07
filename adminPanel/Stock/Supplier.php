<html>
<head>
<link rel = "stylesheet" href = "supplier.css" />

</head>
<body>
<div class="page">
<h1>Sign Up a New Supplier</h1>
	<div class="main">
<form id = "supplier" name="Supplier" action="" method="POST" onsubmit="return password()" style="min-width:200px;"></br>

	<div style="width:100%;text-align:center ; " >
	
	</div>
	<div class="sep"></div>
	
<div class = "inputs">

	<div class="headingbox" id = "hBoxCN"> Company Name  </div>
	<div style="width:100%;text-align:center;">
	<input type="text"  name="Company_Name" placeholder="Company Name" onfocus="headingBoxActive('hBoxCN')" onfocusout="headingBoxInactive('hBoxCN')" /><br>
	</div>
	
	

	<div class="headingbox" id = "hBoxAD"> Permanent Address  </div>
	<div style="width:100%;text-align:center;">
	<!--input type="text" autofocus name="Permenant_Address" onfocus="headingBoxActive('hBoxAD')" onkeydown="validateString(this, 'adderror')" onfocusout="hide('adderror');validateoutString(this, 'adderror2');validatedAll();" /><br-->
	<input type="text" name="Permenant_Address" placeholder="Permanent Address" onfocus="headingBoxActive('hBoxAD')" onfocusout="headingBoxInactive('hBoxAD')" /><br>
	</div>
	
	

	<div class="headingbox" id = "hBoxCNO"> Contact No </div>
	<div style="width:100%;text-align:center;">
	<input type="text" placeholder="Phone No." name="Contact_No" maxlength=10; onfocus="headingBoxActive('hBoxCNO')" onfocusout="headingBoxInactive('hBoxCNO')" /><br>
	</div>
	
	

	<div class="headingbox" id = "hBoxEM"> E-mail Address </div>
	<div style="width:100%;text-align:center;">
	<input type="text"  name="Email_Address" placeholder="mymail@mail.com" onfocus="headingBoxActive('hBoxEM')" onfocusout="headingBoxInactive('hBoxEM')" /><br>
	</div>
	
	<div class="poperror" id="emailerror2"> email@example.com </div>
	
	
	<div style="width:100%;text-align:center;">
	<input class="btnAdd"  type="submit" name=submit value=SUBMIT id="submitButton"  />
	<input class="btnCancel"  type="reset" name=cancel value=CANCEL   />
	</div>

</div>
</form>
<?php
if(isset($_POST["submit"])){
	//1.Create Database Connection
	require("../db/db.php") ;
	
	//3.Perform Database Query
	$sql = "INSERT INTO supplier(Company_Name , Permenant_Address , Contact_No , Email_Address) 
	VALUES ('$_POST[Company_Name]' , '$_POST[Permenant_Address]' , '$_POST[Contact_No]' , '$_POST[Email_Address]') ";
	
	//4.User Returned Database
	if(!mysql_query($sql , $connection)){
		die("Error Query" .mysql_error());	
	}else{
	echo "<div class='ech'><h6>Successfully Added</h6></div>";
	}
	// 5.Close Connection
	mysql_close($connection);
}
?>
</div>
	
<INPUT Type="BUTTON" name="back" class="back" Value="X" Onclick="window.location.href='admin.php'">
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



	