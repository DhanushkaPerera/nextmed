<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/13/2017
 * Time: 5:07 PM
 */

require("../../db/db.php");

$sql = "INSERT INTO bill (ItemNo,BrandName,DosageForm,Quantity,ExpirationDate,UnitPrice,ItemPrice,InvoiceNo) VALUES (
                             ".$_POST['ItemNo'].",
                            ".$_POST['BrandName'].",
                            ".$_POST['DosageForm'].",
                            ".$_POST['Quantity'].",
                            ".$_POST['ExpirationDate'].",
                            ".$_POST['UnitPrice'].",
                            ".$_POST['ItemPrice'].",
                            ".$_POST['InvoiceNo'].")";


if ($db->query($sql) === TRUE) {
    echo "Saved Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}