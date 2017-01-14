<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/13/2017
 * Time: 5:31 PM
 */

require("../../db/db.php");
$sql="SELECT * FROM bill";
$result = mysqli_query($db,$sql);
while( $rows = mysqli_fetch_assoc($result)){
    $id = $rows['StockNo'];
    echo '<tr id="row'.$id.'">';
    echo    '<td>'. '<div class="checkbox"><label><input onchange="checkEvent(this)" name="'.$id.'" type="checkbox" value=""></label>
                                </div></td>';
    echo    '<td >'. $rows['StockNo'].'</td>';
    echo    '<td >'. $rows['BrandName'].'</td>';
    echo    '<td >'. $rows['DosageForm'].'</td>';
    echo    '<td >'. $rows['SupplierName'].'</td>';
    echo    '<td >'. $rows['PurchaseDate'].'</td>';
    echo    '<td >'. $rows['ExpireDate'].'</td>';
    echo    '<td >'. $rows['RemainingQty'].'</td>';
    echo    '<td >'. $rows['OrderedQty'].'</td>';
    echo    '<td >'. $rows['ReturnPolicy'].'</td>';
    echo    '<td >'. $rows['RetailPrice'].'</td>';
    echo '</tr>';
}
mysqli_close($db);