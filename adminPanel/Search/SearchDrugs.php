<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/13/2017
 * Time: 9:49 PM
 */

require("../../db/db.php");
$sql="SELECT * FROM drug WHERE DrugBrandName LIKE '%".$_POST['search']."%'";
$result = mysqli_query($db,$sql);
print_r($_POST['search']);

while($rows = mysqli_fetch_assoc($result)){
    $id = $rows['StockNo'];
    echo '<tr id="row'.$id.'">';
    echo    '<td>'. '<div class="checkbox"><label><input onchange="checkEvent(this)" name="'.$id.'" type="checkbox" value=""></label>
                                </div></td>';
    echo    '<td >'. $rows['DrugNo'].'</td>';
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

<th>Select</th>
                    <th>#Drug No</th>
                    <th>Genetic Name</th>
                    <th>Brand Name</th>
                    <th>Dosage Form</th>
                    <th>Alternatives</th>
                    <th>Compositions</th>
                    <th>Dose Per Person</th>
                    <th>Strength</th>
                    <th>Health Tips</th>
                    <th>Storage</th>