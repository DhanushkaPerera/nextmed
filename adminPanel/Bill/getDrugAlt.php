<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/15/2017
 * Time: 9:49 AM
 */

require("../../db/db.php");
$sql = "SELECT * FROM drug WHERE BrandName LIKE '%" . $_POST['brand'] . "%' AND DosageForm LIKE '%" . $_POST['dosageForm']."%'";
echo 'here';
$result = mysqli_query($db,$sql);
$rows = mysqli_fetch_assoc($result);
$alternatives =  preg_split('/[\s*,\s*]*,+[\s*,\s*]*/', $rows['Alternatives']);
print_r($alternatives);
print_r($_POST['allergicDrugs']);
$alternatives = array_diff($alternatives,$_POST['allergicDrugs']);
print_r($alternatives);
$alternatives = implode('|',$alternatives);
print_r($alternatives);
$sql = "SELECT * FROM drugstock WHERE BrandName REGEXP '" . $alternatives . "' AND DosageForm LIKE '%" . $_POST['dosageForm']."%' AND Expired=0 AND RemainingQty >= ".intval($_POST['quantity'])." ORDER BY ExpireDate ASC;";
$result = mysqli_query($db,$sql);
if(mysqli_num_rows($result)>0) {
    while ($rows = mysqli_fetch_assoc($result)) {
        $id = $rows['StockNo'];
        echo '<tr id="rowSO' . $id . '">';
        echo '<td>' . '<div class="checkbox"><label><input class="optionsDrugs" onchange="optionSelectAlt(this)" name="' . $id . '" type="radio" value="' . $id . '"></label></div></td>';
        echo '<td >' . $rows['StockNo'] . '</td>';
        echo '<td id="BrandName' . $id . '">' . $rows['BrandName'] . '</td>';
        echo '<td id="DosageForm' . $id . '">' . $rows['DosageForm'] . '</td>';
        echo '<td >' . $rows['RemainingQty'] . '</td>';
        echo '<td >' . $rows['ExpireDate'] . '</td>';
        echo '<td >' . $rows['RetailPrice'] . '</td>';
        echo '</tr>';
    }
    echo '<tr>';
    echo '<td colspan="8">';
    echo '<button onclick="getDrugs(\'#Quantity-input\')" class="btn btn-primary" ><i class="glyphicon glyphicon-chevron-left"></i> Go Back</button>';
    echo '</td>';
    echo '</tr>';
    echo '1';
}
else{
    echo '2';
}