<html>
<head>
	<style>
		body{
			background: #d0d0d0;
		}
	</style>
</head>
<body>
<h1> Admin page Trainee Quiz Questions </h1>
<?php
include ('controllers/database.php');

$query2= "SELECT * FROM ques";
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
<h1> All Questions </h1>
<table>
<tr>
<th>Question Id</th>
<th>Question</th>
<th>Correct Answer</th>
<th>Wrong Answer 1</th>
<th>Wrong Answer 2</th>
<th>Wrong Answer 3</th>
<th></th>

</tr>";

while ($record2=mysqli_fetch_assoc($mydata2)){//`qId`, `question`, `correctAns`, `wrongAns1`, `wrongAns2`, `wrongAns3`
	echo"<tr>";
	echo "<td>".$record2["qId"]."</td>";
	echo "<td>".$record2["question"]."</td>";
	echo "<td>".$record2["correctAns"]."</td>";
    echo "<td>".$record2["wrongAns1"]."</td>";
	echo "<td>".$record2["wrongAns2"]."</td>";
	echo "<td>".$record2["wrongAns3"]."</td>";
	echo "<td> <form> <input type='hidden' name='id' value='".$record2["qId"]."'> <input type='submit' name='del2' value='Delete'>  </form> </td>";	
	
	echo"</tr>";
}
echo"</table>";

if(isset($_GET["del2"])){
	$id = $_GET["id"];
	$sqlDel = "delete from `ques` where `qId` = '$id'";
	if( mysqli_query($con,$sqlDel)){
			echo"
				<script>
					alert('Delete Successful');
					window.location.href = 'adminpage.php';
				</script>
			
			";
		}
	
	}

