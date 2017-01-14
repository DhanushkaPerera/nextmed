<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/13/2017
 * Time: 9:49 PM
 */

require("../../db/db.php");
$sql="SELECT * FROM drug WHERE BrandName LIKE '%".$_POST['search']."%'";
$result = mysqli_query($db,$sql);
print_r($_POST['search']);

while($rows = mysqli_fetch_assoc($result)){
    $id = $rows['DrugNo'];
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
mysqli_close($db);
