<head>
	<title>admin</title>

	<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="../css/jquery-ui.css" rel="stylesheet" type="text/css" />
	<link href="../../assets/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="../../jquery/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.js"></script>
	<script type="text/javascript" src="../js/jquery.validate.min.js"></script>

</head>
<style>
	.errorMsg  {
		display:none;
		background: red;
		font-size:12px;
		width: auto;
		color: #000000;
		z-index: 111199;
		border: 2px solid white;
		/* for IE */
		/* CSS3 standard */
	}
	.ui-autocomplete {z-index:111199 !important;}

	.ienlarger {
		float: left;
		clear: none; /* set to left or right if needed */
		/* space between thumbs and wrapping text when there is any text around it */
	}

	.ienlarger a {
		display:block;
		text-decoration: none;
		/* add cursor:default; to this rule to disable the hand cursor */
	}

	.ienlarger a:hover{ /* dont move this positioning to normal state */
		position:relative;
	}

	.ienlarger span img {
		border: 1px solid #FFFFFF; /* adds a border around the image */
		margin-bottom: 8px; /* pushes the text down from the image */
	}

	.ienlarger a span {  /* this is for the large image and the caption */
		position: absolute;
		display:none;
		color: #FFCC00; /* caption text colour */
		text-decoration: none;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 13px; /* caption text size */
		background-color: #000000;
		font-weight: bold;
		padding-top: 10px;
		padding-right: 10px;
		padding-bottom: 13px;
		padding-left: 10px;
	}

	.ienlarger img { /* leave or IE puts a border around links */
		border-width: 0;
	}

	.ienlarger a:hover span {
		display:block;
		top: 50px;
		right:30px;
		z-index: 100;


	}

	.resize_thumb {
		width: 90px; /* enter desired thumb width here */
		height : 80px;
	}
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



		echo'<div class="ienlarger"><a ><img src="../ordering/' .$row['Image1']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="../ordering/' .$row['Image1']. '" alt="large" height=400 width=400 /><br />
    Copy-1</span></a></div>';

		echo "<br>";
		echo"</td>";

		echo"<td align=center >";


		if($row['Image2']=="No copy"){
			echo "No copy";
		}
		else{

			echo'<div class="ienlarger"><a ><img src="../ordering/' .$row['Image2']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="../ordering/' .$row['Image2']. '" alt="large" height=400 width=400 /><br />
    Copy-2</span></a></div>';

		}



		echo "<br>";
		echo"</td>";
		echo"<td align=center >";


		if($row['Image3']=="No copy"){
			echo "No copy";
		}
		else{

			echo'<div class="ienlarger"><a><img src="../ordering/' .$row['Image3']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="../ordering/' .$row['Image3']. '" alt="large" height=400 width=400 /><br />
    Copy-3</span></a></div>';

		}

		echo "<br>";
		echo"</td>";

		echo "<td align=center>";


		echo "<a href='transfer.php?del=";
		echo $row['OrderNo.'];
		echo "'><input type='button' id='completed'  class='btn btn-success' value='Completed' ></a>"; //Transfer0
		echo "<br>";
		echo"</td>";
		echo "</tr>";






	}





	echo"</table>";
	echo  "
 <a href='completedorders.php'>
 <button  type='button' name='processorder' class='btn btn-success' >Completed orders</button>
  </a>
   
    <button  type='button' name='processorder' class='btn btn-success' onclick=window.open('report.php') >View report</button>
  <button  type='button' name='processorder' class='btn btn-success'  onclick=window.open('graph.php') >View chart</button>
   
    </div>";

	echo"</form>";



	?>
	<script>


		function enableButton2() {
			document.getElementById("completed").disabled = false;
			document.getElementById("processorder").disabled =true;
		}

	</script>

</div>