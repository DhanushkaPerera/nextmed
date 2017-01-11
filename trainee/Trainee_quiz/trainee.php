<html>
<head>
	<style>
		body{
			background: #d0d0d0;
		}
	</style>
</head>
<body>
<h1> Admin - Trainee Details </h1>
<?php
include ('controllers/database.php');

$query2= "SELECT * FROM trainee";
//echo $query;
$mydata2=mysqli_query($con, $query2);
//echo $mydata;

echo"</table>";
echo"<br>";
echo"<hr>";
echo"<br>";
echo"<style>
table, th, td {
border: 23px dark blue;
border-collapse: collapse;
border-color: 006600;
</style>
<h1> Current Trainees </h1>
<table>
<tr>
<th>Name    </th>
<th>NIC     </th>
<th>ContactNo  </th>
<th>Email   </th>
<th>UserName  </th>
<th>PassWord  </th>
<th></th>

</tr>";

while ($record2=mysqli_fetch_assoc($mydata2)){//`Name`, `NIC`, `ContactNo`, `Email`, `UserName`, `PassWord`
	echo"<tr>";
	echo "<td>".$record2["Name"]."</td>";
	echo "<td>".$record2["NIC"]."</td>";
	echo "<td>".$record2["ContactNo"]."</td>";
    echo "<td>".$record2["Email"]."</td>";
	echo "<td>".$record2["UserName"]."</td>";
	echo "<td>".$record2["PassWord"]."</td>";
	echo "<td> <form> <input type='hidden' name='NIC' value='".$record2["NIC"]."'> <input type='submit' name='del2' value='Delete'>  </form> </td>";	
	echo "<td> <form> <input type='hidden' name='NIC' value='".$record2["NIC"]."'> <input type='submit' name='del2' value='Update'>  </form> </td>";	
	
	echo"</tr>";
}
echo"</table>";

if(isset($_GET["del2"])){
	$NIC = $_GET["NIC"];
	$sqlDel = "delete from `trainee` where `NIC` = '$NIC'";
	if( mysqli_query($con,$sqlDel)){
			echo"
				<script>
					alert('Delete Successful');
					window.location.href = 'trainee.php';
				</script>
			
			";
		}
	
	}

if(isset($_GET["del2"])){
	$NIC = $_GET["NIC"];
	$sqlUpdate = "Update `trainee` where `NIC` = '$NIC'";
	if( mysqli_query($con,$sqlUpdate)){
			echo"
				<script>
					alert('Update Successful');
					window.location.href = 'trainee.php';
				</script>
			
			";
		}
	
	}
