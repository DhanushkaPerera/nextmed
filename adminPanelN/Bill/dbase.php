<?php

$mysql_host ="localhost";
$mysql_username ="root";
$mysql_password ="";
$mysql_db ="pharmacy";
$con= mysqli_connect($mysql_host,$mysql_username,$mysql_password) or die("ERROR");

mysqli_select_db($con,$mysql_db) or die("ERROR");
//$username='';
//$password='';

?>