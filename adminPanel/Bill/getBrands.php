<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/12/2017
 * Time: 9:58 AM
 */

require("../../db/db.php");
$sql="SELECT BrandName FROM drug";
$result = mysqli_query($db,$sql);

while( $rows = mysqli_fetch_assoc($result)){
    $brandNames[] = $rows['BrandName'];

}
echo json_encode($brandNames);