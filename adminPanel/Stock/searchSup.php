<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/8/2017
 * Time: 10:04 AM
 */
require("../../db/db.php");
$sql="SELECT * FROM supplier WHERE Company_Name LIKE '%".$_POST['search']."%'";
$result = mysqli_query($db,$sql);

    while( $rows = mysqli_fetch_assoc($result)){
        $id = $rows['supNo'];
        echo '<tr id="rowS'.$id.'">';
        echo    '<td>'. '<div class="checkbox"><label><input onchange="checkEventSup(this)" name="S'.$id.'" type="checkbox" value=""></label>
                                </div></td>';
        echo    '<td >'. $rows['supNo'].'</td>';
        echo    '<td >'. $rows['Company_Name'].'</td>';
        echo    '<td >'. $rows['Permenant_Address'].'</td>';
        echo    '<td >'. $rows['Contact_No'].'</td>';
        echo    '<td >'. $rows['Email_Address'].'</td>';
        echo '</tr>';
    }
mysqli_close($db);
?>