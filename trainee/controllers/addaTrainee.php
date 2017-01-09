<?php

	if(isset($_POST["addTrai"])){
		$nam = $_POST["Name"];
		$nic = $_POST["NIC"];
		$cont = $_POST["ContactNo"];
		$email = $_POST["Email"];
		$usern = $_POST["UserName"];
		$pasw = $_POST["PassWord"];
		
		
		// connect database
		include ('database.php');
		
		$sql = "INSERT into `trainee` (`Name`, `NIC`, `ContactNo`, `Email`, `UserName`,'PassWord')
		values('$nam','$nic','$cont','$email','$usern','$pasw')";
		
		if(mysqli_query($con,$sql)){
			 echo "Trainee Insert!";
			 header('location: ../trainee.php');
		}
		else{
			echo "Something Went Wrong!";
		}
		
		
		
		
		
	}
	
	
	



	
?>