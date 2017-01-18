<?php

//Defining variables for the database

$dbhost="localhost";
$dbuser="group";
$dbpassword="abc123";
$dbname="phpgroup";

//function to connect to the database
$db = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);



if ($db) {

print "Database Connected Successfully <br>";

}
else {

print "Unsuccessful Database connection <br>";

} 





?>