<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/9/2017
 * Time: 10:06 AM
 */

require("../../db/db.php");
$noSet = "";
foreach ($_POST['stockNos'] as $no) $noSet += $no+",";
rtrim($noSet, ",");
$sql = "DELETE from drugstock WHERE stockNo IN (". $noSet.");";

if ($db->query($sql) === TRUE) {
    echo "Deleted Successfully";
} else {
    echo "";
}