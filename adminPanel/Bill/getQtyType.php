<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/12/2017
 * Time: 12:30 PM
 */

require("../../db/db.php");
$sql="SELECT QtyType FROM drugstock WHERE ";
$result = mysqli_query($db,$sql);

while( $rows = mysqli_fetch_assoc($result)){
    $brandNames[] = $rows['BrandName'];

}
echo json_encode($brandNames);