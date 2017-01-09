<?php

	if(isset($_POST["addQues"])){
		$qu = $_POST["question"];
		$ca = $_POST["corrAns"];
		$wr1 = $_POST["incorrAns1"];
		$wr2 = $_POST["incorrAns2"];
		$wr3 = $_POST["incorrAns3"];
		
		
		// connect database
		include ('database.php');
		
		$sql = "insert into `ques` (`question`, `correctAns`, `wrongAns1`, `wrongAns2`, `wrongAns3`)
		values('$qu','$ca','$wr1','$wr2','$wr3')";
		
		if(mysqli_query($con,$sql)){
			 echo "Question Insert!";
			 header('location: ../adminpage.php');
		}
		else{
			echo "Something Went Wrong!";
		}
		
		
		
		
		
	}








?>