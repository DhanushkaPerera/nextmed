<!DOCTYPE html>


<html>
<head>
    <title>admin</title>

    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../../jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>

</head>

<body>
<div class="container" style="margin-left:10px;">
<div class="row header">


    <!--div class="col-sm-12">
        <div class="well">
            <h2>Customer Details</h2>
            <div> 
			
			 
			<div class="col-sm-4">
			
			NIC
			<input type="text" placeholder="920290505v" class="form-control"   maxlength="13" name=nic onfocus="headingBoxActive('hBoxNIC')" onkeyup="validateNIC(this)" autofocus onfocusout="upperCASE(this);hide('NICerror');validateoutNIC(this);validatedAll();" />
			</div>
			<input class="btnSearch"  type="submit" name=search value=SEARCH id="searchButton" ><br>
			</div>
        </div>
    </div--><!--/col-->
<div class="col-sm-12">
	<h3>Customer Details</h3>
        <div class="well">	
			<form class="form-inline" method="post">
				<div class="form-group">
				  <label for="email">NIC</label>
				  <input type="text" class="form-control" name="nic" id="email" placeholder="935643090V">
				</div>
			
				<button type="submit" name="search" class="btn btn-info" >Search</button>
			</form>
<?php

require("../../db/db.php");


if(isset($_POST["search"])){
	
	
        $nic = $_POST["nic"];
		/*$name = $_POST["name"];*/
		
				
		$sql = "select * from customer where NIC='$nic' ";

			$res = mysqli_query($db,$sql);
			$count=mysqli_num_rows($res);
			if ($count>0){
			
			while($row = mysqli_fetch_array($res)){
			echo "<p></p><p>Name: ".$row['FName']."</p><p>Gender: ".$row['Gender']."</p>";
			
			}}
			else{
				echo "Not Registered";
			}
			
			
}

?>

		</div>
		
</div>
  
</div><!--/row-->