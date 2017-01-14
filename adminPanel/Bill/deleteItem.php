<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/13/2017
 * Time: 4:55 PM
 */

require("../../db/db.php");
$noSet = "";
foreach ($_POST['ItemNos'] as $no) $noSet += $no+",";
rtrim($noSet, ",");
$sql = "DELETE from bill WHERE stockNo IN (". $noSet.");";

if ($db->query($sql) === TRUE) {
    echo "Deleted Successfully";
} else {
    echo "";
}