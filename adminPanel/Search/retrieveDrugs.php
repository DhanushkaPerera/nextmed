<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/9/2017
 * Time: 3:29 PM
 */

require("../../db/db.php");

$drugN = $_REQUEST["drugN"];

//dealing with scripting attacks(unwanted html)
//$nic = htmlspecialchars($nic);


//deal with sql injection attacks
//$email = quote_smart($email, $db);
//$password = quote_smart($password, $db);


$sql="SELECT * FROM drug where DrugBrandName='$drugN'";
$result = mysqli_query($db,$sql);

while( $rows = mysqli_fetch_assoc($result)){
    echo '<tr>';
    echo    '<th >'. $rows['GeneticName'].'</th>';
    echo    '<th >'. $rows['DrugBrandName'].'</th>';
    echo    '<th >'. $rows['DrugAlternatives'].'</th>';
    echo    '<th >'. $rows['Compositions'].'</th>';
    echo    '<th >'. $rows['DosageForm'].'</th>';
    echo    '<th >'. $rows['DosePerPerson'].'</th>';
    echo    '<th >'. $rows['Strength'].'</th>';
    echo    '<th >'. $rows['Supplier'].'</th>';
    echo    '<th >'. $rows['ManufacturedDate'].'</th>';
    echo    '<th >'. $rows['ExpDate'].'</th>';
    echo    '<th >'. $rows['OrderedPrice'].'</th>';
    echo    '<th >'. $rows['RetailPrice'].'</th>';
    echo    '<th >'. $rows['Discount'].'</th>';
    echo '</tr>';
}