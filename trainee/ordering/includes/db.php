<?php

//Defining variables for the database

$dbhost="localhost";
$dbuser="User";
$dbpassword="abc123";
$dbname="project1";

//function to connect to the database
$db = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);



if ($db) {

print "Database Connected Successfully <br>";

}
else {

print "Unsuccessful Database connection <br>";

}





?>