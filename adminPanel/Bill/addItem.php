<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/13/2017
 * Time: 5:07 PM
 */

require("../../db/db.php");
$sql = "INSERT INTO bill (InvoiceNo,ItemNo,BrandName,DosageForm,Quantity,ExpirationDate,UnitPrice,ItemPrice,Discount,HealthTips, SaleDate) VALUES (
                            ".$_POST['invoiceNo'].",
                            ".$_POST['ItemNo'].",
                            '".$_POST['BrandName']."',
                            '".$_POST['DosageForm']."',
                            ".$_POST['Quantity'].",
                            '".$_POST['ExpirationDate']."',
                            ".$_POST['UnitPrice'].",
                            ".$_POST['ItemPrice'].",
                            ".$_POST['Discount'].",
                            '".$_POST['HealthTips']."',
                            now() )";


if ($db->query($sql) === TRUE) {
    echo "Added Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}