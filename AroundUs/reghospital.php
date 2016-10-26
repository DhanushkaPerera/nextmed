<!DOCTYPE html>
<html>

<head>
	<link rel = "stylesheet" href="regDoctor.css"/>
<head>

<body>
	<div class="doctor">
	<h1>Register a Hospital </h1> 
	<div class="main">
	
		<form id="doctors" name="regdoctors" action="" method="post"><br>
			
			<div style="width:100%;text-align:center;">
    
			</div>
			<div class="sep"></div>
			
			<div class="inputs">
			<table>
				
				<tr>
				<div style="width:100%;text-align:center;">
				<td><label>Hospital Name</label></td>
				<td><input name="name" type="text" placeholder="Hospital Name"></td>
				</div>
				</tr>
				
				<tr>
				<div style="width:100%;text-align:center;">
				<td><label>Location</label></td>
				<td><input name = "location" type="text" placeholder="Area"></td>
				</div>
				</tr>
				
				<tr>
				<div style="width:100%;text-align:center;">
				<td><label>Telephone Number</label></td>
				<td><input name="telephonenum" type="text" placeholder="Telephone Number"></td>
				</div>
				<tr>
				
				<tr>
				<div style="width:100%;text-align:center;">
				<td><input class="buttonSub"  type="submit" name=submit value=Submit   /></td>
				<td><input class="buttonCan"  type="reset" name=cancel value=Cancel   /></td>
				</div>
				</tr>
			<table>
			
			</div>

	</div>
			
		</form>
	</div>
<body>

<?php
	
		require("../db/db.php");
		
		if(isset($_POST["buttonSub"])){
			
			//Retrieve Data
			$sql = "INSERT INTO doctor(hospitalname,location,telephonenum) VALUES ('$_POST[name]' , '$_POST[location]' , '$_POST[telephonenum]')";
			
			//$sql = "SELECT DISTINCT username FROM user";
			$res = mysqli_query($connection , $sql);
				
			if($res){
				echo "New record created Successfully";
			}
			else{
				echo "Error : " . mysqli_error($connection); 
			}
		
		}
		
		//Close connectionection
		mysqli_close($connection);
		
?>

</html>