<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/16/2017
 * Time: 1:08 AM
 */

require("../../db/db.php");
$sql = "SELECT healthTips FROM drug WHERE BrandName LIKE '%" . $_POST['BrandName'] . "%' AND DosageForm LIKE '%" . $_POST['DosageForm']."%'";
$result = mysqli_query($db,$sql);
$rows = mysqli_fetch_assoc($result);
echo  json_encode($rows);
