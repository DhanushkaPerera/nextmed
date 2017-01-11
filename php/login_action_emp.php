<?php
require("../db/db.php");

$nic=$_REQUEST["nic"];
$password=$_REQUEST["password"];

//dealing with scripting attacks(unwanted html)
$nic = htmlspecialchars($nic);
$password = htmlspecialchars($password);


//deal with sql injection attacks
//$email = quote_smart($email, $db);
//$password = quote_smart($password, $db);


$sql="SELECT * FROM pharmacist where NIC='$nic' AND Password='$password'";
$result = mysqli_query($db,$sql);



if(mysqli_num_rows($result)==1){ //Each entry is unique so the number of rows returned from the db table should be 1
    session_start();          //starting a session if login is successful
    $_SESSION['loginEmp']='1'; //creating a session variable
	echo "Success";
    //header('location:/../testing/indexreg.htm');
    
    
}

else{
    echo "Failed";
    session_start(); //starting a session if login is successful
    $_SESSION['loginEmp']=''; //unsucce
    
}














?>