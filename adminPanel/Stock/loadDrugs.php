<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/8/2017
 * Time: 10:04 AM
 */
require("../../db/db.php");
$sql="SELECT * FROM drugStock";
$result = mysqli_query($db,$sql);
$count = $_POST['count'] ;
    while( $rows = mysqli_fetch_assoc($result) or $count>0){
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
        $count--;
    }
?>