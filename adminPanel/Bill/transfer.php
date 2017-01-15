<?php
	require("../../db/db.php");
 
	if( isset($_GET['del']) )
	{
		$id = $_GET['del'];
        $sql1="INSERT INTO complete (`OrderNo.`,`NIC`,`DP`,`Address`,`DPTime`,`Telephone`,`Email`,`Image1`,`ImageName1`,`Image2`,`ImageName2`,`Image3`,`ImageName3`) 
        SELECT `OrderNo.`,`NIC`,`DP`,`Address`,`DPTime`,`Telephone`,`Email`,`Image1`,`ImageName1`,`Image2`,`ImageName2`,`Image3`,`ImageName3` FROM `order` WHERE `OrderNo.` = '$id'  ";
		
        $res1= mysqli_query($db,$sql1) or die("Failed".mysqli_error($db));
        $sql2= "DELETE FROM `order` WHERE `OrderNo.` = '$id' ";
		
		$res2= mysqli_query($db,$sql2) or die("Failed".mysqli_error($db));
        echo "<meta http-equiv='refresh' content='0;url=billing.php'>";
        
        
		
	}
?>