<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/8/2017
 * Time: 10:04 AM
 */
require("../../db/db.php");
$sql="SELECT * FROM drugstock WHERE DrugBrandName LIKE '%".$_POST['search']."%'";
$result = mysqli_query($db,$sql);
print_r($_POST['search']);

    while($rows = mysqli_fetch_assoc($result)){
        $id = $rows['StockNo'];
        echo '<tr id="row'.$id.'">';
        echo    '<td>'. '<div class="checkbox"><label><input onchange="checkEvent(this)" name="'.$id.'" type="checkbox" value=""></label>
                                </div></td>';
        echo    '<td >'. $rows['StockNo'].'</td>';
        echo    '<td >'. $rows['DrugBrandName'].'</td>';
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
?>