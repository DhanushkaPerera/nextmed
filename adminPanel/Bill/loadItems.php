<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/13/2017
 * Time: 5:31 PM
 */

require("../../db/db.php");
$sql="SELECT * FROM bill WHERE InvoiceNo=".$_POST['InvoiceNo'];
$result = mysqli_query($db,$sql);
while( $rows = mysqli_fetch_assoc($result)){
    $id = $rows['ItemNo'];
    echo '<tr id="row'.$id.'">';
    echo    '<td>'. '<div class="checkbox"><label><input onchange="checkEvent(this)" name="'.$id.'" type="checkbox" value=""></label>
                                </div></td>';
    echo    '<td >'. $rows['ItemNo'].'</td>';
    echo    '<td >'. $rows['BrandName'].'</td>';
    echo    '<td >'. $rows['DosageForm'].'</td>';
    echo    '<td >'. $rows['Quantity'].'</td>';
    echo    '<td >'. $rows['ExpirationDate'].'</td>';
    echo    '<td >'. $rows['UnitPrice'].'</td>';
    echo    '<td align="right" >'. $rows['ItemPrice'].'</td>';
    echo '</tr>';
}
mysqli_close($db);