<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/12/2017
 * Time: 12:30 PM
 */

require("../../db/db.php");
$sql="SELECT QtyType FROM drugstock WHERE BrandName LIKE '%".$_POST['brand']."%' AND DosageForm LIKE '%".$_POST['dosageForm']."%';";

$result = mysqli_query($db,$sql);
echo $db->error;
$rows = mysqli_fetch_assoc($result);
$qtyType= $rows['QtyType'];
echo $qtyType;

