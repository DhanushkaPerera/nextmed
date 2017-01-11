<?php

//Defining variables for the database

$dbhost="us-cdbr-azure-southcentral-f.cloudapp.net";
$dbuser="bd3bc2a79fa1ad";
$dbpassword="60eb0f4f";
$dbname="acsm_2a0677acd5113ea";

//function to connect to the database
$db = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);



if ($db) {

}
else {

print "Unsuccessful Database connection <br>";

}





?>