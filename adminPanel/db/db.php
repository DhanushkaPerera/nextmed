<?php

//Defining variables for the database

$dbhost="sql6.freemysqlhosting.net";
$dbuser="sql6137899";
$dbpassword="QKhdTRF8pi";
$dbname="sql6137899";

//function to connect to the database
$connection = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);



if ($connection) {


}
else {

print "Unsuccessful Database connection <br>";

}





?>