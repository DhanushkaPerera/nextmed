<html>
<head>
	<style>
		body{
			background: #d0d0d0;
		}
	</style>
</head>
<body>
<h1> Admin Page Customer Details </h1>
<?php
include ('controllers/database.php');

$query2= "SELECT * FROM customer";
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
<h1> All Customers </h1>
<table>
<tr>
<th>NIC</th>
<th>FName</th>
<th>LName</th>
<th>Gender</th>
<th>DOB</th>
<th>Address</th>
<th>Status</th>
<th>Contact</th>
<th>Email</th>
<th>Password</th>
<th></th>

</tr>";

while ($record2=mysqli_fetch_assoc($mydata2)){//`NIC`, `FName`, `LName`, `Gender`, `DOB`, `Address`,'Status','Contact','Email','Password'
	echo"<tr>";
	echo "<td>".$record2["NIC"]."</td>";
	echo "<td>".$record2["FName"]."</td>";
	echo "<td>".$record2["LName"]."</td>";
    echo "<td>".$record2["Gender"]."</td>";
	echo "<td>".$record2["DOB"]."</td>";
	echo "<td>".$record2["Address"]."</td>";
	echo "<td>".$record2["Status"]."</td>";
	echo "<td>".$record2["Contact"]."</td>";
	echo "<td>".$record2["Email"]."</td>";
	echo "<td>".$record2["Password"]."</td>";
	echo "<td> <form> <input type='hidden' name='NIC' value='".$record2["NIC"]."'> <input type='submit' name='del2' value='Delete'>  </form> </td>";	
	
	echo"</tr>";
}
echo"</table>";

if(isset($_GET["del2"])){
	$NIC = $_GET["NIC"];
	$sqlDel = "delete from `customer` where `NIC` = '$NIC'";
	if( mysqli_query($con,$sqlDel)){
			echo"
				<script>
					alert('Delete Successful');
					window.location.href = 'adcust.php';
				</script>
			
			";
		}
	
	}
