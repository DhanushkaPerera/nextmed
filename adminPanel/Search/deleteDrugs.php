<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/9/2017
 * Time: 10:06 AM
 */

require("../../db/db.php");
$noSet = "";
foreach ($_POST['drugNos'] as $no) $noSet += $no+",";
rtrim($noSet, ",");
$sql = "DELETE from drug WHERE DrugNo IN (". $noSet.");";

if ($db->query($sql) === TRUE) {
    echo "Deleted Successfully";
} else {
    echo "";
}