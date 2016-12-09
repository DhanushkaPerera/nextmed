

<?php
require("../../db/db.php");

$drugN = $_REQUEST["drugN"];

//dealing with scripting attacks(unwanted html)
//$nic = htmlspecialchars($nic);


//deal with sql injection attacks
//$email = quote_smart($email, $db);
//$password = quote_smart($password, $db);


$sql="SELECT * FROM drug where DrugBrandName='$drugN'";
$result = mysqli_query($db,$sql);
echo '
	<tr>
		<th> Genetic Name 
		</th>
		<th> Drug Brand Name 
		</th>
		<th> Drug Alternatives 
		</th>
		<th> Compositions 
		</th>
		<th> Dosage Form 
		</th>
		<th> Strength 
		</th>
		<th> Supplier 
		</th>
		<th> Quantity 
		</th>
		<th> Manufactured Date
		</th>
		<th> Expiration Date
		</th>
		<th> Ordered Price
		</th>
		<th> Retail Price
		</th>
		<th> Discount
		</th>
	</tr>';

 if(mysqli_num_rows($result)==0){
	echo 'Drug is not found';
}

else{
	while( $rows = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo    '<th >'. $rows['GeneticName'].'</th>';
        echo    '<th >'. $rows['DrugBrandName'].'</th>';
        echo    '<th >'. $rows['DrugAlternatives'].'</th>';
        echo    '<th >'. $rows['Compositions'].'</th>';
        echo    '<th >'. $rows['DosageForm'].'</th>';
        echo    '<th >'. $rows['DosePerPerson'].'</th>';
        echo    '<th >'. $rows['Strength'].'</th>';
        echo    '<th >'. $rows['Supplier'].'</th>';
        echo    '<th >'. $rows['ManufacturedDate'].'</th>';
	    echo    '<th >'. $rows['ExpDate'].'</th>';
        echo    '<th >'. $rows['OrderedPrice'].'</th>';
        echo    '<th >'. $rows['RetailPrice'].'</th>';
        echo    '<th >'. $rows['Discount'].'</th>';
        echo '</tr>';
	}



}
	
?>