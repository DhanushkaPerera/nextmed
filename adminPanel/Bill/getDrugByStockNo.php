<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/13/2017
 * Time: 9:59 AM
 */

require("../../db/db.php");
$sql="SELECT ExpireDate,RetailPrice,Discount FROM drugstock WHERE StockNo = ".$_POST['StockNo'].";" ;
//$sql1 ="UPDATE drugstock SET RemainingQty = RemainingQty - ".$_POST['quantity']." WHERE StockNo = ".$_POST['StockNo'].";";
$result = mysqli_query($db,$sql);
$rows = mysqli_fetch_assoc($result);
echo  json_encode($rows);
mysqli_close($db);


