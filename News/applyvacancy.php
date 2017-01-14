<?php
	require("db.php");

	$fullname = $_POST["fullname"];
	$gender = $_POST["gender"];
	$dob = $_POST["dob"];
	$address = $_POST["address"];
	$district = $_POST["district"];
	$contactnumber = $_POST["contactno"];
	$nic = $_POST["nic"];
	$email = $_POST["email"];
	$experience = $_POST["experience"];
	$information = $_POST["information"];
	/*$cv = $_POST["userfile"];*/
	
	$serverfile = $_FILES['userfile']['tmp_name'];
	$clientfile = addslashes($_FILES['userfile']['name']);
	$filesize = filesize($_FILES['userfile']['tmp_name']);
	$filetype = $_FILES['userfile']['tmp_name'];
	$path='file/'.$clientfile;
	
	/*if((move_uploaded_file($serverfile,'photo/'.$_FILES['userfile']['name']))  ){*/
	
	if((move_uploaded_file($serverfile,'photo/'.$_FILES['userfile']['name']))  ){ 
	
		$sql = "INSERT INTO vacancy(FullName,Gender,DOB,Address,District,ContactNumber,NIC,Email,Experience,Information,Filesize,Filetype,Filetype) 
		VALUES('$fullname','$gender','$dob','$address','$district','$contactnumber','$nic','$email','$experience','$information','$clientfile','$filesize','$filetype','$serverfile')";
		
		$res = mysqli_query($db,$sql);
	
		if($res){
			echo "New record created successfully";
		}
		else{
			echo "Error : " . mysqli_error($db);
		}
		
	}
	
	mysqli_close($db);
?>