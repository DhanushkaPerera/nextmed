<!DOCTYPE html>


<html>
<head> //importing style sheet containung libraries
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../../jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="../css/jquery-ui.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/bootstrap-table/src/bootstrap-table.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="../../jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.js"></script>
    <script type="text/javascript" src="../js/jquery.validate.min.js"></script>

</head>
<style>
   

</style>

<body>
<div class="container" id="processing" style="margin-left:10px;">
    <h3 id="header">Completed Orders</h3>
    <?php
    require("../../db/db.php"); //provides database connection
    $sql="SELECT * FROM `complete` "; //SQL query toretrieve all details from complete table
    $result=mysqli_query($db,$sql); // performs a query against the database
    echo "
<form method='POST'><table class='table table-striped table-responsive'> //retrieving the table"
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


//displaying 3 images that can be enlarged when hovered
        echo'<div class="ienlarger"><a href=../ordering/'.( $row['Image1'] ).'><img src="../ordering/' .$row['Image1']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="../ordering/' .$row['Image1']. '" alt="large" height=300 width=300 /><br />
    Copy-1</span></a></div>';

        echo "<br>";
        echo"</td>";

        echo"<td align=center >";


        if($row['Image2']=="No copy"){
            echo "No copy";
        }
        else{

            echo'<div class="ienlarger"><a href=../ordering/'.( $row['Image2'] ).'><img src="../ordering/' .$row['Image2']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="../ordering/' .$row['Image2']. '" alt="large" height=300 width=300 /><br />
    Copy-2</span></a></div>';

        }



        echo "<br>";
        echo"</td>";
        echo"<td align=center >";


        if($row['Image3']=="No copy"){
            echo "No copy";
        }
        else{

            echo'<div class="ienlarger"><a href=../ordering/'.( $row['Image3'] ).'><img src="../ordering/' .$row['Image3']. '" alt="thumb" class="resize_thumb" /><span>
    <img src="../ordering/' .$row['Image3']. '" alt="large" height=300 width=300 /><br />
    Copy-3</span></a></div>';

        }



        echo "<br>";
        echo"</td>";

       


        echo"</tr>";

    }

    echo"</table>";

   
    echo"</div>";
        
echo"</form>";

        
echo  "
 <a href='vieworders.php'>  //Directing to complted orders table when clicked
    	
  <button  type='button'  class='btn btn-success'  >Back</button>
    
    </a>
    </div>";
        
echo"</body>";

   ?> 