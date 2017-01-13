<!DOCTYPE html>


<html>
<head>
    <title>Billing</title>

    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../../jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>

</head>
<style>

.loader {
    border: 16px solid #f3f3f3; /* Light grey */
    border-top: 16px solid #3498db; /* Blue */
    border-radius: 50%;
    width: 50px;
    height: 50px;
    animation: spin 10s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}

</style>

<body>
<div class="container" id="processing" style="margin-left:10px;">
<h3 id="header">Online Orders</h3>
<?php 
require("../../db/db.php");
$sql="SELECT * FROM `order` ";
$result=mysqli_query($db,$sql);
echo "
<form method='POST'><table class='table table-striped table-responsive'>
    <thead>
    <tr>
        <th class='center'>Order No</th>
        <th text-align='center'>NIC</th>
        <th>Delivery/Pickup</th>
        <th class='center'>Expect Time</th>
        <th class='center'>Telephone No</th>
        <th class='center'>Copy1</th>
		<th class='center'>Copy2</th>
		<th class='center'>Copy3</th>
    </tr>
    </thead>";

	while($row=mysqli_fetch_array($result))
{
    echo"
	
	
    <tr id='rowNum".$row['OrderNo.']."'>
	<td >".$row['OrderNo.']."</td>
	<td >".$row['NIC']."</td>
	<td >".$row['DP']."</td>
	<td >".$row['DPTime']."</td>
	<td >".$row['Telephone']."</td>";
	
	echo"<td  height=50px>";
    
     

    echo'<div class="ienlarger"><a href='.( $row['Image1'] ).'><img src="' .$row['Image1']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="' .$row['Image1']. '" alt="large" height=50 width=50 /><br />
    Copy-1</span></a></div>';

    echo "<br>";
    echo"</td>";
	 
	echo"<td align=center >";
    
   
    if($row['Image2']=="No copy"){
        echo "No copy";
    }
    else{
      
     echo'<div class="ienlarger"><a href='.( $row['Image2'] ).'><img src="' .$row['Image2']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="' .$row['Image2']. '" alt="large" height=50 width=50 /><br />
    Copy-2</span></a></div>';

    }
   
    
    
    echo "<br>";
     echo"</td>";
     echo"<td align=center >";
    
   
    if($row['Image3']=="No copy"){
        echo "No copy";
    }
    else{
      
     echo'<div class="ienlarger"><a href='.( $row['Image3'] ).'><img src="' .$row['Image3']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="' .$row['Image3']. '" alt="large" height=50 width=50 /><br />
    Copy-3</span></a></div>';

    }
    
    
  
 echo "<br>";
 echo"</td>";
       
	   echo "<td align=center>";
    

echo "<button onclick='loading(this)' name='processorder' class='btn btn-success' >Process Order</button>"; 
echo "<br>";
echo"</td>";

    
	   
    echo"</tr>";
    
   } 

echo"</table></form>";


?>
<script>

function  loading(button) {
        $(button).html('<div class="loader"></div>');
    }
</script>

</div>
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
			session_start();
$_SESSION["CstAllergicDrugs"]=$row['AllergicDrugs'];	
			}}
			else{
				echo "Not Registered";
			}
	
}
?>

		</div>
		
</div>
  
</div><!--/row-->
</div>

</html>