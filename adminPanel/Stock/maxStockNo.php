<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/9/2017
 * Time: 10:45 PM
 */

require("../../db/db.php");
$sql="SELECT Max(stockNo) FROM drugstock";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_assoc($result);
echo ($row['Max(stockNo)']);
mysqli_close($db);