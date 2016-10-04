

<?php
$dbhost="localhost";
$dbuser="User";
$dbpassword="abc123";
$dbname="project1";

//function to connect to the database
$db = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);

$drugN = $_REQUEST["drugN"];

//dealing with scripting attacks(unwanted html)
//$nic = htmlspecialchars($nic);


//deal with sql injection attacks
//$email = quote_smart($email, $db);
//$password = quote_smart($password, $db);


$sql="SELECT * FROM drug where DrugBrandName='$drugN'";
$result = mysqli_query($db,$sql);

 if(mysqli_num_rows($result)==0){
	echo 'Drug is not found';
}

else{
	while( $rows = mysqli_fetch_assoc($result)){
	  $table[] = $rows;
	}
	
	$size = sizeof($table);
	
	echo '
	<div class="raw">
		<div class="columnH"> Genetic Name 
		</div>';
	for ($x = 0; $x < $size; $x++) {
		echo '<div class="column c'.$x.'" >
	    '. $table[$x]['GeneticName'].'</div>';
	}
	echo '</div>';
	
	echo '
	<div class="raw">
		<div class="columnH"> Drug Brand Name 
		</div>';
	for ($x = 0; $x < $size; $x++) {
		echo '<div class="column c'.$x.'" >
	    '. $table[$x]['DrugBrandName'].'</div>';
	}
	echo '</div>';
	
	echo '
	<div class="raw">
		<div class="columnH"> Drug Alternatives 
		</div>';
	for ($x = 0; $x < $size; $x++) {
		echo '<div class="column c'.$x.'" >';
		$alt = $table[$x]['DrugAlternatives'];
		if(strcmp($alt,"None")!=0){
			$altarray = explode(",",$alt);
			for ($y = 0; $y < sizeof($altarray); $y++){
				echo '<div class="b1" onclick="searchInner(this)">'.$altarray[$y] ;
				echo '</div>';
			}
			echo '</div>';
		}
		else{
			echo $alt.'</div>';
		}
		
	}
	echo '</div>';
	
	echo '
	<div class="raw">
		<div class="columnH"> Compositions 
		</div>';
	for ($x = 0; $x < $size; $x++) {
		echo '<div class="column c'.$x.'" >
	    '. $table[$x]['Compositions'].'</div>';
	}
	echo '</div>';
	
	
	echo '
	<div class="raw">
		<div class="columnH"> Dosage Form 
		</div>';
	for ($x = 0; $x < $size; $x++) {
		echo '<div class="column c'.$x.'" >
	    '. $table[$x]['DosageForm'].'</div>';
	}
	echo '</div>';
	
	echo '
	<div class="raw">
		<div class="columnH"> Dose Per Person 
		</div>';
	for ($x = 0; $x < $size; $x++) {
		echo '<div class="column c'.$x.'" >
	    '. $table[$x]['DosePerPerson'].'</div>';
	}
	echo '</div>';
	
	echo '
	<div class="raw">
		<div class="columnH"> Strength 
		</div>';
	for ($x = 0; $x < $size; $x++) {
		echo '<div class="column c'.$x.'" >
	    '. $table[$x]['Strength'].'</div>';
	}
	echo '</div>';
	
	echo '
	<div class="raw">
		<div class="columnH"> Supplier 
		</div>';
	for ($x = 0; $x < $size; $x++) {
		echo '<div class="column c'.$x.'" >
	    '. $table[$x]['Supplier'].'</div>';
	}
	echo '</div>';
	
	echo '
	<div class="raw">
		<div class="columnH"> Quantity 
		</div>';
	for ($x = 0; $x < $size; $x++) {
		echo '<div class="column c'.$x.'" >
	    '. $table[$x]['Quantity'].'</div>';
	}
	echo '</div>';
	
	echo '
	<div class="raw" >
		<div class="columnH hiddenraws" style="display:none" > Manufactured Date
		</div>';
	for ($x = 0; $x < $size; $x++) {
		echo '<div class="column c'.$x.' hiddenraws" style="display:none">
	    '. $table[$x]['ManufacturedDate'].'</div>';
	}
	echo '</div>';
	
	echo '
	<div class="raw">
		<div class="columnH"> Expiration Date
		</div>';
	for ($x = 0; $x < $size; $x++) {
		echo '<div class="column c'.$x.'" >
	    '. $table[$x]['ExpDate'].'</div>';
	}
	echo '</div>';
	
	
	echo '
	<div class="raw">
		<div class="columnH"> Retail Price
		</div>';
	for ($x = 0; $x < $size; $x++) {
		echo '<div class="column c'.$x.'" >
	    '. $table[$x]['RetailPrice'].'</div>';
	}
	echo '</div>';

	echo '
	<div class="raw">
		<div class="columnH"> Discount
		</div>';
	for ($x = 0; $x < $size; $x++) {
		echo '<div class="column c'.$x.'" >
	    '. $table[$x]['Discount'].'</div>';
	}
	echo '</div>';
	
	$width = 200*($size+1) + 14*$size;
	
	echo '
	
	<div class="raw">
		<div class="columnEx" style="width:'.$width.'px;" onclick="showRaws();">
		</div>';

	echo '</div>';
	

}
	
?>