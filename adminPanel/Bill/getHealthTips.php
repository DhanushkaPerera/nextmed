<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/15/2017
 * Time: 9:37 PM
 */

require("../../db/db.php");
$sql="SELECT BrandName,HealthTips FROM bill WHERE InvoiceNo='".$_POST['InvoiceNo']."'";

$result = mysqli_query($db,$sql);
$listedDrugs = array("none");
echo $db->error;
while( $rows = mysqli_fetch_assoc($result)){
    if(!in_array($rows['BrandName'],$listedDrugs)){
        array_push($listedDrugs,$rows['BrandName']);
        echo '<div class="panel panel-default">';
        echo '<div class="panel-heading"><h4>'.$rows['BrandName'].'</h4></div>';
        echo '<div class="panel-body">'.$rows['HealthTips'].'</div>';
        echo '</div>';
    }
}