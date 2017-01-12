<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/12/2017
 * Time: 11:01 AM
 */

require("../../db/db.php");
$sql="SELECT DosageForm FROM drug WHERE Brandname ='".$_POST['brand']."'";
$result = mysqli_query($db,$sql);

while( $rows = mysqli_fetch_assoc($result)){
    $DosageForms[] = $rows['DosageForm'];

}
echo json_encode($DosageForms);