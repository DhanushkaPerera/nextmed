<html>
<head>
<title>Update drugs</title>

<link rel = "stylesheet" href = "table.css" />
</head>

<body>
	<div class="page">
	<h1>Update Drugs</h1>
	<div class="main">
	
	
		<form id="" name="" action="" method="post" >
            <table border=0>
                <thead>
			<tr>
			<th colspan=2 >Drug Id</th>
			</tr>
            </thead>

                    <tr><td><input type="number" name="drugid" size="10" class="inputs"></td></tr>
                    <td align=center ><input type="submit" value="SEARCH" name="search" class="buttonSub"></td>

            </table>
        </form>
		<br/><br/><br/><br/><br/>

 <?php 
 require("../db/db.php");


			if (isset($_POST["search"])){
                
                /*include('dbase.php');*/
				
				$id=$_POST["drugid"];
				
			$sql = "select * from drug where DrugNo='$id' " ;

			$res = mysqli_query($connection,$sql);
			if (!mysqli_query($connection,$sql))
  {
  die('Error: ' . mysqli_error($connection));
  }
			
			while($row = mysqli_fetch_array($res)){
				
				echo "<table  align=left border=0>
<form method='POST' action='' >
<link rel = 'stylesheet' href = '../drug.css' />
<tr>
<td>Drug No</td>
<td><input type=text name=DrugNo size=25 maxlength=10 value=" .$row['DrugNo']."></td>
</tr> 

<tr>
<td>Genetic Name</td>
<td><input type=text name=GeneticName size=25 maxlength=10 value=".$row['GeneticName']."></td>
</tr> 

<tr>
<td>Drug Brand Name</td>
<td><input type=text name=DrugBrandName size=25 maxlength=10 value=".$row['DrugBrandName']."></td>
</tr>

<tr>
<td>Drug Alternatives</td>
<td><input type=text name=DrugAlternatives size=25 maxlength=10 value=".$row['DrugAlternatives']."></td>
</tr>

<tr>
<td>Composition</td>
<td><input type=text name=Compositions size=12 maxlength=10 value=".$row['Compositions']."></td>
</tr>

<tr>
<td>Dosage Form</td>
<td><select name=DosageForm multiple size=4>
<option ".($row['DosageForm']=="Capsule"?"selected":"").">Capsule</option>
<option ".($row['DosageForm']=="Tablet"?"selected":"").">Tablet</option>
<option ".($row['DosageForm']=="Pill"?"selected":"").">Pill</option>
<option ".($row['DosageForm']=="Syrup"?"selected":"").">Syrup</option>
<option ".($row['DosageForm']=="Cream"?"selected":"").">Cream</option>
<option>Liquid</option>
<option>Gel</option>
<option>Balm</option>
<option>Lotion</option>
<option>Ointment</option>
<option>Ear drops</option>
<option>Eye drops</option> 
</select>
</td>
</tr>

<tr>
<td>Dose per Person</td>
<td><input type=text name=DosePerPerson size=12 maxlength=10 value=".$row['DosePerPerson']."></td>
</tr>

<tr>
<td>Strength</td>
<td><select name=Strength multiple size=4 >
<option ".($row['Strength']=="10mg"?"selected":"").">10mg</option>
<option ".($row['Strength']=="10ml"?"selected":"").">10ml</option>
<option ".($row['Strength']=="1spoon"?"selected":"").">1spoon</option>
<option ".($row['Strength']=="1drop"?"selected":"").">1drop<option>
<option ".($row['Strength']=="1capsule"?"selected":"").">1capsule</option>
<option ".($row['Strength']=="1tablet"?"selected":"").">1tablet</option>
<option ".($row['Strength']=="1pill"?"selected":"").">1pill</option>
</select>
</td>
</tr>

<tr>
<td>Healthtips</td>
<td><textarea  name=HealthTips>".$row['healthTips']."</textarea></td>
</tr>

<tr>
<td>Storage</td>
<td><input type=text name=storage size=25 maxlength=10 value=".$row['storage']."></td>
</tr>

<tr>
<td>Allergic Conditions</td>
<td><input type=text name=allergicConditions size=25 maxlength=10 value=".$row['allergicConditions']."></td>
</tr>


<tr>
<td>Supplier</td>
<td><select name=Supplier multiple size=4>
<option ".($row['Supplier']=="php code to get suppliers"?"selected":"").">php code to get suppliers</option>
<option ".($row['Supplier']=="al1"?"selected":"").">al1</option>
<option ".($row['Supplier']=="al2"?"selected":"").">al2</option>
<option ".($row['Supplier']=="al3"?"selected":"").">al3</option>
<option ".($row['Supplier']=="al3"?"selected":"").">al3</option>
</select>
</td>
</tr>

<tr>
<td>Quantity</td>
<td><input type=text name=Quantity size=25 maxlength=10 value=".$row['Quantity']."></td>
</tr>

<tr>
<td>Manufactured Date</td>
<td><input type=date name=ManufacturedDate value=".$row['ManufacturedDate']."></td>
</tr>

<tr>
<td>Exp. Date</td>
<td><input type=date name=ExpDate value=".$row['ExpDate']." ></td>
</tr>

<tr>
<td>Ordered Price</td>
<td><input type=text name=OrderedPrice size=25 maxlength=10 value=".$row['OrderedPrice']."></td>
</tr>

<tr>
<td>Profit%</td>
<td><input type=text name=Profit size=25 maxlength=10 value=".$row['Profit']."> <input type=submit name=submit value=CalculateRetailPrice class='buttonSub'></td>
</tr>

<tr>
<td>Retail Price</td>
<td><input type=text name=RetailPrice size=25 maxlength=10 value=".$row['RetailPrice']."></td>
</tr>

<tr>
<td>Return Policy</td>
<td><input type=radio name=ReturnPolicy checked=".$row['ReturnPolicy']."  >1     <input type=radio name=ReturnPolicy checked=".$row['ReturnPolicy']." >0</td>
</tr>


<tr>
<td>Discount</td>
<td><input type=text name=Discount size=25 maxlength=10 value=".$row['Discount']."></td>
</tr>

<tr>
<td>Discounted Price</td>
<td><input type=text name=DiscountedPrice size=12 maxlength=10 value=".$row['DiscountedPrice']."></td>
</tr>

<tr class='up'>
<td ></td>
<td><input type='submit' name='update' value=UPDATE class=buttonSub />
<input type=reset name=reset value=CANCEL class=buttonSub /></td>
</tr>




</table>
</form>";


}
}

if (isset($_POST["update"])){
				
				$DrugNo=isset($array['DrugNo']) ? $array['DrugNo'] : '';
				$GeneticName=isset($array['GeneticName']) ? $array['GeneticName'] : '';
				$DrugBrandName=isset($array['DrugBrandName']) ? $array['DrugBrandName'] : '';
				$DrugAlternatives=isset($array['DrugAlternatives']) ? $array['DrugAlternatives'] : '';
				$Compositions=isset($array['Compositions']) ? $array['Compositions'] : '';
				$DosageForm=isset($array['DosageForm']) ? $array['DosageForm'] : '';
				$DosePerPerson=isset($array['DosePerPerson']) ? $array['DosePerPerson'] : '';
				$Strength=isset($array['Strength']) ? $array['Strength'] : '';
				$healthTips= isset($array['healthTips']) ? $array['healthTips'] : '';
				$storage= isset($array['storage']) ? $array['storage'] : '';
				$allergicConditions= isset($array['allergicConditions']) ? $array['allergicConditions'] : '';
				$Supplier=isset($array['Supplier']) ? $array['Supplier'] : '';
				$Quantity=isset($array['Quantity']) ? $array['Quantity'] : '';
				$ManufacturedDate=isset($array['ManufacturedDate']) ? $array['ManufacturedDate'] : '';
				$ExpDate= isset($array['ExpDate']) ? $array['ExpDate'] : '';
				$OrderedPrice= isset($array['OrderedPrice']) ? $array['OrderedPrice'] : '';
				$Profit= isset($array['Profit']) ? $array['Profit'] : '';
				$RetailPrice= isset($array['RetailPrice']) ? $array['RetailPrice'] : '';
				$ReturnPolicy=isset($array['ReturnPolicy']) ? $array['ReturnPolicy'] : '';
				$Discount= isset($array['Discount']) ? $array['Discount'] : '';
				$DiscountedPrice=isset($array['DiscountedPrice']) ? $array['DiscountedPrice'] : '';
				
				
				

            

            $sql="update  drug set 
			GeneticName='$GeneticName',
			DrugBrandName='$DrugBrandName',
			DrugAlternatives='$DrugAlternatives',
			Compositions='$Compositions',
			DosageForm='$DosageForm',
			DosePerPerson='$DosePerPerson',
			Strength='$Strength' ,
			healthTips='$healthTips',
			storage='$storage',
			allergicConditions='$allergicConditions',
			Supplier='$Supplier',
			Quantity='$Quantity',
			ManufacturedDate='$ManufacturedDate',
			ExpDate='$ExpDate',
			OrderedPrice='$OrderedPrice',
			Profit='$Profit',
			RetailPrice='$RetailPrice',
			ReturnPolicy='$ReturnPolicy',
			Discount='$Discount'
			DiscountedPrice='$DiscountedPrice'
			where DrugNo='$DrugNo' ";

            if (mysqli_query($connection,$sql)){
                echo "<div class='ech' ><h6>Record updated</h6></div>";
            }else{
			 echo "Something Went Wrong!";
			 printf("error: %s\n", mysqli_error($connection));
		}
	}
		
 ?>	
</div>
<INPUT Type="BUTTON" name="back" class="back" Value="X" Onclick="window.location.href='../admin.php'">
</div>
</body>
		
</html>
