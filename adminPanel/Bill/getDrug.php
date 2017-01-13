<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/12/2017
 * Time: 3:09 PM
 */

require("../../db/db.php");
$sql="SELECT * FROM drugstock WHERE BrandName LIKE '%".$_POST['brand']."%' AND DosageForm LIKE '%".$_POST['dosageForm']."%' AND Expired=0 AND RemainingQty >= ".intval($_POST['quantity'])." ORDER BY ExpireDate ASC;" ;
$result = mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0){
    while( $rows = mysqli_fetch_assoc($result)){
        $id =  $rows['StockNo'];
        echo '<tr id="rowSO'.$id.'">';
        echo    '<td>'. '<div class="checkbox"><label><input class="optionsDrugs" onchange="optionSelect(this)" name="'.$id.'" type="radio" value="'.$id.'"></label></div></td>';
        echo    '<td >'. $rows['StockNo'].'</td>';
        echo    '<td >'. $rows['BrandName'].'</td>';
        echo    '<td >'. $rows['DosageForm'].'</td>';
        echo    '<td >'. $rows['RemainingQty'].'</td>';
        echo    '<td >'. $rows['ExpireDate'].'</td>';
        echo    '<td >'. $rows['RetailPrice'].'</td>';
        echo '</tr>';
    }
}
else{
    echo "The drug is not available";
}
