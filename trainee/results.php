<html>
<head>

<body bgcolor=" #5AF59C  ">
</head>
<body>
<?php
	$wro = "";
	if(isset($_POST["addQues"])){
		
		
		
		// connect database
		include ('controllers/database.php');
		
		$correctAns =0;
		$cQ = "";
		$wQ = "";
		$rows = 0;
		
		$rand = $_POST["rands"];
		for ($u = $rand; $u < ($rand+10) ; $u++){
			
			$sqlrows = "select * from ques where qid='$u'";
			//echo $sqlrows;
			$result = mysqli_query($con, $sqlrows);
			
			while($row =  mysqli_fetch_assoc($result)){
				$ca = $row["correctAns"];
				
				if( $ca == $_POST["q$u"]) {
					$correctAns +=1;
					$cQ = $cQ.", $u";
					
				}
				else{
					$wro = $wro."<br>".$row["question"]." - ". $row["correctAns"];
				}
			}
		}
		
		
		
		
		
		
		
		

		
	
		
		echo "No. of Correct Answers: $correctAns <br>" ; 
		echo "Wrong Questions with Correct Answers $wro :";
		
		
		
	}




	if(isset($_GET["killSession"])){
		session_start();
		session_destroy();
		header ('Location: Index.php');
	
	}
	





?>

<form>
			<input type='submit' name='killSession' value='Log Out'>
		
</form>
</body> 
</html>
