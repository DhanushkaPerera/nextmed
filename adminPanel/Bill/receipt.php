<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="table.css"/>
</head>

<body>
		<div class="back" style="float:right;cursor:pointer;color:#0033cc;width:30px;height:30px;border-radius:100%;text-align:center;line-height:30px;" onclick="goBack()">X</div>
	
	<div class="header"><h2>Anura Pharmacy	<br>No. 112/A, Hospital Road, Gampaha<br>Tel:033 22 321 12 | Fax: 033 22 321 10</h2></div>
<br>Invoice No: 
<td><input name="checked" id="checkAgree" value="" type="text" onclick="validatedAll()"/></td>
Date/time:
<td><input name="checked" id="checkAgree" value="" type="text" onclick="validatedAll()"/></td>
Customer Name:
<td><input name="checked" id="checkAgree" value="" type="text" onclick="validatedAll()"/></td>
NIC: 
<td><input name="checked" id="checkAgree" value="" type="text" onclick="validatedAll()"/></td>
	<div class="doctortable">
	<table>
	
		<tr>
			<th>Bra/Gen/Alt Name</th>
			<th>Strength</th>			
			<th>Dosage per Person</th>
			<th>Health Tips</th>
			<th>Exp. Date</th>
			<th>Discount</th>
			<th>Unit Price</th>
			<th>Qty</th>
			<th>Total Price</th>
			
					
			
		</tr>
		
		<tr>
			<td>Paracetamol</td>
			<td>500mg</td>
			<td>1 tablet per 32 kg</td>
			<td>Drink more water during day</td>
			<td>10/02/2019</td>
			<td>4%</td>
			<td>Rs. 100.00</td>
			<td>100</td>
			<td>100</td>
		
		</tr>
		
		<tr>
			<td>Paracetamol</td>
			<td>500mg</td>
			<td>1 tablet per 32 kg</td>
			<td>Drink more water during day</td>
			<td>10/02/2017</td>
			<td>4%</td>
			<td>Rs. 100.00</td>
			<td>100</td>
			<td>100</td>
		
		</tr>
		
		<tr>
			<td>Paracetamol</td>
			<td>1 tablet per 32 kg</td>
			<td>500mg</td>
			<td>Drink more water during day</td>
			<td>10/02/2018</td>
			<td>4%</td>
			<td>Rs. 100.00</td>
			<td>100</td>
			<td>100</td>
		
		</tr>
		
	</table>
	</div>
	
</body>

</html>

<script>
function goBack() {
    window.history.back();
}
</script>