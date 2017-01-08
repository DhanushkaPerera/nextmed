<html>
<head>
    <script type="text/javascript" src=""></script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Billing</title>
    <link rel="stylesheet" type="text/css" href="billnew.css">

</head>

<body>
	<div class = "bill">
	<div class = "drugs"><form id="customer" name="customer"   method="post" onsubmit="return password()" style="min-width:200px;">
			<div style="width:100%;text-align:center;">
            <h3>Customer Deatils</h3> 
			</div>
			
		<div class="sep"></div>
		
     <div class ="inputs" >
			
			<div class="headingbox" id="hBoxNIC"  > National ID  </div>
			<div style="width:100%;text-align:center;">
			<input type="text" placeholder="920290505v" maxlength="13" name=nic onfocus="headingBoxActive('hBoxNIC')" onkeyup="validateNIC(this)" autofocus onfocusout="upperCASE(this);hide('NICerror');validateoutNIC(this);validatedAll();" />
						<div class="headingbox" id="hBoxNIC"  > Name  </div>
			<div style="width:100%;text-align:center;"><input type="text" placeholder="920290505v" maxlength="13" name=name onfocus="headingBoxActive('hBoxNIC')" onkeyup="validateNIC(this)" autofocus onfocusout="upperCASE(this);hide('NICerror');validateoutNIC(this);validatedAll();" />
			<!--div class="headingbox" id="hBoxNIC" required > National ID  </div>
			<div style="width:100%;text-align:center;">
			<input type="text" placeholder="920290505v" maxlength="13" name=nic onfocus="headingBoxActive('hBoxNIC')" onkeyup="validateNIC(this)" autofocus onfocusout="upperCASE(this);hide('NICerror');validateoutNIC(this);validatedAll();" /-->
			<input class="btnSearch"  type="submit" name=search value=SEARCH id="searchButton" ><br>
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
		
		<div class="headingbox" id="hBoxON" > Order No </div>
			<div style="width:100%;text-align:center;">
            <input type="text" autofocus name=orderno onfocus="headingBoxActive('hBoxON')" onkeydown="validateString(this, 'nameerror')" onfocusout="hide('nameerror');validateoutString(this, 'nameerror2');validatedAll();" /><br>
			</div>
			
			<div class="headingbox" id="hBoxOM"> Order Method </div>
			<div style="width:100%;text-align:center;">
			<input type="radio" onfocus="headingBoxActive('hBoxOM')" autofocus name=ReturnPolicy onfocusout="validatePhoneNo(this, 'returnperror');validatedAll();"/>Online
			<input type="radio" onfocus="headingBoxActive('hBoxOM')" autofocus name=ReturnPolicy onfocusout="validatePhoneNo(this, 'returnperror');validatedAll();"/>General<br>
			</div>
		
		<div class="headingbox" id="hBoxBRAND" > Brand Name </div>
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
			
		</div>
						
	</div>
	
	</form>
	</div>



<?php


if(isset($_POST["submit"])){
	include('dbase.php');
	
        $brandname = $_POST["brandname"];
		$quantity = $_POST["quantity"];
		
		$sql = "select * from drug where DrugBrandName='$brandname'";

			$res = mysqli_query($con,$sql);
			
			while($row = mysqli_fetch_array($res)){
				
				echo "<table  align=left border=1>
<tr>
<th>Drug No</th>
<th>Brand Name</th>
<th>Quantity</th>
<th>Price</th>
<th>Allergic Conditions</th>
<th>Storage</th>
<th>Healthtips</th>
</tr>

<tr>
<td>".$row['DrugNo']."</td>
<td>".$row['DrugBrandName']."</td>
<td>".$quantity."</td>
<td>".$row['RetailPrice']."</td>
<td>".$row['allergicConditions']."</td>
<td>".$row['storage']."</td>
<td>".$row['healthTips']."</td>



</tr></table>";



}
}
?>

    

</body>
</html>

