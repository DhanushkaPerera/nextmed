<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/8/2017
 * Time: 10:28 PM
 */

require("../../db/db.php");

$sql = "UPDATE drugstock SET StockNo='". $_POST['rowItem'][1]."',
                                BrandName= '". $_POST['rowItem'][2]."',
                                DosageForm= '". $_POST['rowItem'][3]."',
                                SupplierName= '". $_POST['rowItem'][4]."',
                                PurchaseDate= '". $_POST['rowItem'][5]."',
                                ExpireDate= '". $_POST['rowItem'][6]."',
                                RemainingQty= '". $_POST['rowItem'][7]."',
                                OrderedQty= '". $_POST['rowItem'][8]."',
                                ReturnPolicy= '". $_POST['rowItem'][9]."',
                                RetailPrice= '". $_POST['rowItem'][10]."'
                                WHERE StockNo=". $_POST['oldID'].";";

if ($db->query($sql) === TRUE) {
    echo "Saved Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}