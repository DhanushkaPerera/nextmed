<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/12/2017
 * Time: 3:09 PM
 */

require("../../db/db.php");
$sql="SELECT * FROM drugstock WHERE BrandName LIKE '%".$_POST['brand']."%' AND DosageForm LIKE '%".$_POST['dosageForm']."%' AND Expired=0 AND RemainingQty >= ".intval($_POST['quantity'])." ORDER BY ExpireDate DESC;" ;
$result = mysqli_query($db,$sql);
while( $rows = mysqli_fetch_assoc($result)){
    $table[]['StockNo'] = $rows['StockNo'];
    $table[]['BrandName'] = $rows['BrandName'];
    $table[]['DosageForm'] = $rows['DosageForm'];
    $table[]['RemainingQty'] = $rows['RemainingQty'];
    $table[]['ExpireDate'] = $rows['ExpireDate'];
    $table[]['UnitPrice'] = $rows['RetailPrice'];
}

echo json_encode($table);