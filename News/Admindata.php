<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$database = "pharmacy";
		
		$conn = mysqli_connect($servername,$username,$password,$database);
		
		if(!$conn){
			die("Connection Failed : " . mysqli_connect_error());
		}
		
		$sql = "INSERT INTO news(postnews,date)
			VALUES ('$_POST[public_notice]' , '$_POST[postdate]')";
			
		if(mysqli_query($conn , $sql)){
			echo "New record created Successfully";
		}
		else{
			echo "Error : " . mysqli_error($conn); 
		}
		
		mysqli_close($conn);

?>