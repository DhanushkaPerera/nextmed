<!DOCTYPE html>
<html>

<head>
	<link rel = "stylesheet" href="regDoctor.css"/>
<head>

<body>
	<div class="doctor">
	<h1>Register a Doctor </h1> 
	<div class="main">
	
		<form id="doctors" name="regdoctors" action="" method="post"><br>
			
			<div style="width:100%;text-align:center;">
    
			</div>
			<div class="sep"></div>
			
			<div class="inputs">
			<table>
				<tr>
				<div style="width:100%;text-align:center;">
				<td><label>Name</label></td>
				<td><input name="name" type="text" placeholder="Name"></td>
				</div>
				</tr>
				
				<tr>
				<div style="width:100%;text-align:center;">
				<td><label>Hospital</label></td>
				<td><input name = "hospital" type="text" placeholder="Hospital"></td>
				</div>
				</tr>
				
				<tr>
				<div style="width:100%;text-align:center;">
				<td><label>Category</label></td>
				<td><input name="category" type="text" placeholder="Category"></td>
				</div>
				</tr>
				
				<tr>
				<div style="width:100%;text-align:center;">
				<td><input class="buttonSub"  type="submit" name=submit value=Submit   /></td>
				<td><input class="buttonCan"  type="reset" name=cancel value=Cancel   /></td>
				</div>
				</tr>
			</table>
				
			</div>

	</div>
			
		</form>
	</div>
<body>

<?php
	
		require("../db/db.php");
		
		if(isset($_POST["buttonSub"])){
			
			//Retrieve Data
			$sql = "INSERT INTO doctor(name,category,hospital) VALUES ('$_POST[name]' , '$_POST[category]' , '$_POST[hospital]')";
			
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