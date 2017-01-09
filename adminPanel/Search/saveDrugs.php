<?php
/**
 * Created by PhpStorm.
 * User: Vishva
 * Date: 1/8/2017
 * Time: 10:28 PM
 */

require("../../db/db.php");

$sql = "UPDATE drug SET DrugNo='". $_POST['rowItem'][1]."',
                                GeneticName= '". $_POST['rowItem'][2]."',
                                BrandName= '". $_POST['rowItem'][3]."',
                                DosageForm = '". $_POST['rowItem'][4]."',
                                Alternatives = '". $_POST['rowItem'][5]."',
                                Compositions = '". $_POST['rowItem'][6]."',
                                DosePerPerson = '". $_POST['rowItem'][7]."',
                                Strength = '". $_POST['rowItem'][8]."',
                                HealthTips = '". $_POST['rowItem'][9]."',
                                Storage = '". $_POST['rowItem'][10]."'
                                WHERE DrugNo=". $_POST['oldID'].";";

if ($db->query($sql) === TRUE) {
    echo "Saved Successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

