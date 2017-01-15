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
				<div class="topic">
				<label style="font-size:18px;"> Enter the location </label><br>
				</div>
				<!--input name = "location" type = "text" size = "30" /-->
				<div class="option">
				<select class="select" name="location" type="text">
				
				<?php
					require("../db/db.php");
									
					$sql = "SELECT location FROM hospital ORDER BY location ASC";
									
					$res = mysqli_query($db,$sql);
									
					if($res){
						/*echo "<li>";*/
										
						while($row = mysqli_fetch_array($res)){
							echo "<option>".$row['location']."</option>";
						}
										
						/*echo "</li>";*/
					}
					else{
						echo "Error : " . mysqli_error($db); 
					}
					
					//close connection
					mysqli_close($db);
				?>
				
				
				
				
				
				
					<!--option value="Gampaha"> Gampaha </option>
					<option value="Ragame"> Ragama </option>
					<option value="Wattupitiawala"> Wattupitiawala </option>
					<option value="Negambo"> Negambo </option>
					<option value="Minuwangoda">  Minuwangoda </option>
					<option value="Dompe"> Dompe </option>
					<option value="Divulapitiya"> Divulapitiya </option>
					<option value="Kiribathgoda"> Kiribathgoda </option>
					<option value="Pamunuwa"> Pamunuwa </option>
					<option value="Udupila"> Udupila </option>
					<option value="Biyagama"> Biyagama </option>
					<option value="Seeduwa"> Seeduwa </option>
					<option value="Kapala Kanda"> Kapala Kanda </option>
					<option value="Radawana"> Radawana </option>
					<option value="Akkaragama"> Akkaragama </option>
					<option value="Bokalagama"> Bokalagama </option>
					<option value="Hiripitiya"> Hiripitiya </option-->
				</select>
				</div>
				<div class="button">
				<input id="btn1" class = "buttonSub" name = "submitbutton1" type = "submit" value = "Search" onclick="searchHospital('result')"/>
				</div>
			</form>	
		</div>
		
		<div class = "doctor">
			<form id = "" action = "" method = "post">
				<div class="topic">
				<label style="font-size:18px;"> Enter the specialized area </label><br>
				</div>
				<!--input name = "special" type = "text" size = "30" /-->
				<div class="option">
				<select style="align:centre;" class="select" name="special" type="text">
					<!--option value="Paediatric Surgeon"> Paediatric Surgeon </option>
					<option value="Cancer Specialist"> Cancer Specialist </option>
					<option value="Denito Urinary Surgeon"> Denito Urinary Surgeon </option>
					<option value="Neuro Surgeon"> Neuro Surgeon </option>
					<option value="Gynaecologist">  Gynaecologist </option>
					<option value="Paediatrician"> Paediatrician </option>
					<option value="Gynaecologist"> Gynaecologist</option>
					<option value="Psychiatrist"> Psychiatrist </option>
					<option value="Surgeon"> Surgeon </option>
					<option value="Neuro Physician"> Neuro Physician </option>
					<option value="Cardiologist"> Cardiologist </option>
					<option value="Physician"> Physician </option>
					<option value="Eye Surgeon"> Eye Surgeon </option>
					<option value="Oncologist"> Oncologist </option>
					<option value="Dermatologist"> Dermatologist </option-->
				</select>
				</div>
				<div class="button">
				<input id="btn1" class = "buttonSub" name = "submitbutton2" type = "submit" value = "Search" onclick="searchDoctor('result')"/>
				</div>
			</form>	
		</div>
	</div>
	
	<div class = "result">
			
			<p>Find out what are the details of hospitals in Gampaha District <br> 
			and the doctors who are specialists for specialized areas, <br>
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
