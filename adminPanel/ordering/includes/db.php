<?php

//Defining variables for the database

$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="acsm_2a0677acd5113ea";

//function to connect to the database
$db = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);



if ($db) {

}
else {

print "Unsuccessful Database connection <br>";

}





?>