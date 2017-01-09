<?php
//$con = mysqli_connect("localhost","root","","Trainee_quiz");



//Defining variables for the database

$dbhost="us-cdbr-azure-southcentral-f.cloudapp.net";
$dbuser="bd3bc2a79fa1ad";
$dbpassword="60eb0f4f";
$dbname="acsm_2a0677acd5113ea";

//function to connect to the database
$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);



if ($con) {

}
else {

print "Unsuccessful Database connection <br>";

}





?>