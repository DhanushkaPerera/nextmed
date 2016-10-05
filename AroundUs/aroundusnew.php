<!DOCTYPE html>
<html>

<head> 
	<title> Around Us</title>
	<link rel = "stylesheet" href = "aroundusnew.css" />
</head>

<body>

	<div class = "header ">
			<div class = "hospital1">
				<img class = "bottom" src = "Gampaha.jpg" width = "100%" height = "300px" />
				<img class = "top" src = "Sethma.jpg" width = "100%" height = "300px" />
			</div>
			<div class = "hospital2">
				<img class = "bottom1" src = "hospital.jpg"  width = "100%" height = "300px" />
				<img class = "top1" src = "sethmanew.jpg" width = "100%" height = "300px" />
			</div>
	</div>
	
	<div class = "rightnav">
		<div class = "hospital">
			<form id = "" action = "" method = "post">
				<label> Enter the location </label><br>
				<input name = "location" type = "text" size = "30" />
				<input class = "buttonSub1" name = "submitbutton1" type = "submit" value = "Search" onclick="searchHospital('result')"/>
			</form>	
		</div>
		
		<div class = "doctor">
			<form id = "" action = "" method = "post">
				<label> Enter the category </label><br>
				<input name = "special" type = "text" size = "30" />
				<input class = "buttonSub2" name = "submitbutton2" type = "submit" value = "Search" onclick="searchDoctor('result')"/>
			</form>	
		</div>
	</div>
	
	<div class = "result">
	
	
			
			
			<p>Find out what are the details of hospitals in Gampaha District <br> 
			and the doctors who are specialists for each category, <br>
			You can search for more details.</p>
	
<?php
	
		require("../db/db.php");
		
		if(isset($_POST["submitbutton1"])){
			
			//Retrieve Data
			$sql = "SELECT * FROM hospital WHERE location = '$_POST[location]'";
			//$sql = "SELECT DISTINCT username FROM user";
			$res = mysqli_query($db , $sql);
				
			if($res){
				echo "<table border = 1 >
					<tr>
					<th> Hospitlal Name </th>
					<th> Location </th>
					<th> Telephone Number </th>
					</tr>";
				while($row = mysqli_fetch_array($res)){
					echo "<tr><td>". $row['hospitalname']."</td><td>".$row['location']."</td><td>".$row['telephonenum']."</td></tr>";
				}
				echo "</table>";
			}
			else{
				echo "Error : " . mysqli_error($db); 
			}
		
		}
		
		else{
			if(isset($_POST["submitbutton2"])){
				//Retrieve Data
				$sql = "SELECT * FROM doctor WHERE category = '$_POST[special]'";
				//$sql = "SELECT DISTINCT username FROM user";
				$res = mysqli_query($db , $sql);
					
				if($res){
					echo "<table border = 1>
						<tr>
						<th> Doctor </th>
						<th> Category </th>
						<th> Hospital </th>
						</tr>";
					while($row = mysqli_fetch_array($res)){
						echo "<tr><td>". $row['name']."</td><td>".$row['category']."</td><td>".$row['hospital']."</td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "Error : " . mysqli_error($db); 
				}
			}
		}
		
		//Close connectionection
		mysqli_close($db);
		
?>
</div>
	
	
<script>

	function searchHospital(result)
    {
	var display =document.getElementById(result);
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			display.innerHTML = xmlhttp.responseText;
			var str = xmlhttp.responseText;
			display.innerHTML = xmlhttp.responseText;
			
		}
	};
	xmlhttp.open("GET", "searchhospital.php", true);
	xmlhttp.send();
    
	}
	
	function searchDoctor(result)
    {
	var display =document.getElementById(result);
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function() {
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
			display.innerHTML = xmlhttp.responseText;
			var str = xmlhttp.responseText;
			display.innerHTML = xmlhttp.responseText;
			
		}
	};
	xmlhttp.open("GET", "searchdoctor.php", true);
	xmlhttp.send();
    
	}
	
</script>

</body>

</html>
