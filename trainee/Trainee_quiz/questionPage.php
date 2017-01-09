<html>
<head>
<title></title>
</head>
<body bgcolor="#D0D0D0 ">
	<div class="header">
		<div class="header1">
			<h1 id="name">Welcome To Nextmed Quiz Center</h1>
		</div>
		<div class="header2">
			Question Paper
		</div>
	</div>
    <style>
	background{margin:1px}
	</style>
	
	
	<div class="col-12" style="padding-top:15%"  "padding-left: 50%" margin: 1px>
	<form action="results.php" method="post">
		<table>
			<?php
				include ('controllers/database.php');
				
				
				$rand = rand(1,10);
				$i = $rand;
				$x= $i+10;
				while ($i<$x){
				$sql = "SELECT * FROM ques WHERE qid = '$i'";
				$resz=mysqli_query($con,$sql);
				//$res= mysqli_fetch_assoc($resz);
				while($row = mysqli_fetch_assoc($resz)){ // `question`, `correctAns`, `wrongAns1`, `wrongAns2`, `wrongAns3`
					$quid = $row["qId"];
					$qu = $row["question"];
					$wa0 = $row["correctAns"];
					$wa1 = $row["wrongAns1"];
					$wa2 = $row["wrongAns2"];
					$wa3 = $row["wrongAns3"];
					
					
					$input = array($wa0, $wa1 ,$wa2 ,$wa3);
					
					shuffle($input);	
				
				
				
					?>
					
					<tr>
					 <td colspan="2"><b><?php echo $qu;  ?></b><td> 
                     <td><input type="hidden" value="<?php echo $qu;  ?>" name="ques<?php echo $quid;  ?>"></td>
					</tr>
					<tr>
						<td><input type="radio" name="q<?php echo $quid;  ?>" value="<?php echo $input[0];  ?>"> <?php echo $input[0] ; ?><td>
						<td> <td>
					</tr>
					<tr>
						<td><input type="radio" name="q<?php echo $quid;  ?>" value="<?php echo $input[1];  ?>"> <?php echo $input[1];  ?> <td>
						<td> <td>
					</tr>
					<tr>
						<td><input type="radio" name="q<?php echo $quid;  ?>" value="<?php echo $input[2];  ?>"><?php echo $input[2]; ?> <td>
						<td> <td>
					</tr>
					<tr>
						<td><input type="radio" name="q<?php echo $quid;  ?>" value="<?php ;echo $input[3]  ?>"> <?php echo $input[3] ?><td>
						<td> <td>
					</tr>
					<td><input type="hidden" value="<?php echo $rand;  ?>" name="rands"></td>
					
				<?php }
				$i++;
				}
			
			
			
			?>
			
		</table>
		
		<p><input type="submit" name="addQues" value="Save to database"></p>
		</div>
	</form>
	
	</div>
	
	
	

</body>
</html>