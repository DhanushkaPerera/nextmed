<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/9/2017
 * Time: 3:29 PM
 */

require("../../db/db.php");

//$drugN = $_REQUEST["drugN"];

//dealing with scripting attacks(unwanted html)
//$nic = htmlspecialchars($nic);


//deal with sql injection attacks
//$email = quote_smart($email, $db);
//$password = quote_smart($password, $db);


$sql="SELECT * FROM drug";
$result = mysqli_query($db,$sql);

while( $rows = mysqli_fetch_assoc($result)){
    $id =  $rows['DrugNo'];
    echo '<tr id="row'.$id.'">';
    echo    '<td>'. '<div class="checkbox"><label><input onchange="checkEvent(this)" name="'.$id.'" type="checkbox" value=""></label>
                                </div></td>';
    echo    '<td >'. $rows['DrugNo'].'</td>';
    echo    '<td >'. $rows['GeneticName'].'</td>';
    echo    '<td >'. $rows['BrandName'].'</td>';
    echo    '<td >'. $rows['DosageForm'].'</td>';
    echo    '<td >'. $rows['Alternatives'].'</td>';
    echo    '<td >'. $rows['Compositions'].'</td>';
    echo    '<td >'. $rows['DosePerPerson'].'</td>';
    echo    '<td >'. $rows['Strength'].'</td>';
    echo    '<td >'. $rows['healthTips'].'</td>';
    echo    '<td >'. $rows['storage'].'</td>';
    echo '</tr>';
}