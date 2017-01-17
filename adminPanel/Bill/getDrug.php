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
    if(in_array(trim($_POST['brand']),$_POST['allergicDrugs'])){
        echo '<tr>';
        echo '<td colspan="8" style=" vertical-align: middle;">';
        echo '<h4 style="color: red;float:left;"> This drug may be allergic to the customer</h4>';
        echo '<button style="float: right" onclick="getUserAlternativeDrug()" class="btn btn-primary" ><i class="glyphicon glyphicon-search"></i> Find Alternatives</button>';
        echo '<td>';
        echo '</tr>';
    }
    while( $rows = mysqli_fetch_assoc($result)){
        $id =  $rows['StockNo'];
        echo '<tr id="rowSO'.$id.'">';
        echo    '<td>'. '<div class="checkbox"><label><input class="optionsDrugs" onchange="optionSelect(this)" name="'.$id.'" type="radio" value="'.$id.'"></label></div></td>';
        echo    '<td >'. $rows['StockNo'].'</td>';
        echo    '<td >'. $rows['BrandName'];
        echo '</td>';
        echo    '<td >'. $rows['DosageForm'].'</td>';
        echo    '<td >'. $rows['RemainingQty'].'</td>';
        echo    '<td >'. $rows['ExpireDate'].'</td>';
        echo    '<td >'. $rows['RetailPrice'].'</td>';
        echo    '<td >'. $rows['Discount'].'</td>';
        echo '</tr>';
    }
    echo '1';
}
else {
    $sql = "SELECT * FROM drug WHERE BrandName LIKE '%" . $_POST['brand'] . "%' AND DosageForm LIKE '%" . $_POST['dosageForm']."%'";
    $result = mysqli_query($db,$sql);
    $rows = mysqli_fetch_assoc($result);
    $alternatives =  preg_split('/[\s*,\s*]*,+[\s*,\s*]*/', $rows['Alternatives']);
    $alternatives = implode('|',$alternatives);
    $sql = "SELECT * FROM drugstock WHERE BrandName REGEXP '" . $alternatives . "' AND DosageForm LIKE '%" . $_POST['dosageForm']."%' AND Expired=0 AND RemainingQty >= ".intval($_POST['quantity'])." ORDER BY ExpireDate ASC;";
    $result = mysqli_query($db,$sql);
    if(mysqli_num_rows($result)>0){
        if(in_array(trim($_POST['brand']),$_POST['allergicDrugs'])){
            echo '<tr>';
            echo '<td colspan="8">';
            echo '<p style="color: red"> This drug may be allergic to the customer</p>';
            echo '<button onclick="getUserAlternativeDrug()" class="btn btn-primary" ><i class="glyphicon glyphicon-search"></i> Find Alternatives</button>';
            echo '<td>';
            echo '</tr>';
        }
        while( $rows = mysqli_fetch_assoc($result)){
            $id =  $rows['StockNo'];
            echo '<tr id="rowSO'.$id.'">';
            echo    '<td>'. '<div class="checkbox"><label><input class="optionsDrugs" onchange="optionSelect(this)" name="'.$id.'" type="radio" value="'.$id.'"></label></div></td>';
            echo    '<td >'. $rows['StockNo'].'</td>';
            echo    '<td >'. $rows['BrandName'];
            echo '</td>';
            echo    '<td >'. $rows['DosageForm'].'</td>';
            echo    '<td >'. $rows['RemainingQty'].'</td>';
            echo    '<td >'. $rows['ExpireDate'].'</td>';
            echo    '<td >'. $rows['RetailPrice'].'</td>';
            echo    '<td >'. $rows['Discount'].'</td>';
            echo '</tr>';
        }
        echo '2';
    }
    else{
        echo '3';
    }

}
