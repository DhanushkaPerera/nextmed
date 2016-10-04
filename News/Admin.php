<!DOCTYPE>
<html>
	<head> 
		<title> Admin - public notice </title>
		<link rel = "stylesheet" href = "Admin.css" />
	</head>
	
	<body>
		<form id = "admin" action = "Admindata.php" method = "post">
		
		<div style="width:100%;text-align:center;">
            <h3> PUBLIC NOTICE </h3> 
			</div>
			
			<div class="sep"></div>
			
		<div class = "notice">
				<div class = "headingbox"> Date </div>
				<div style="width:100%;text-align:center;">
				<input type = "date" name = "postdate"  /></br></br>
				<textarea name = "public_notice" placeholder="Please type here your notice" rows="10" cols="80"> </textarea></br></br> 
				<input class = "button" type = "submit" name = "btnSubmit" value = "Save"/>
		</div>
		</form>
			
	</body>
</html>


