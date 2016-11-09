<?php

//importing db.php in the includes folder
require("/../db/db.php");


$nic=$_POST["nic"];
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$address=$_POST["address"];
$status=$_POST["civil"];
$occupation=$_POST["occupation"];
$contact=$_POST["contactno"];
$email=$_POST["emailaddress"];
$password=$_POST["password"];



$sql="INSERT INTO signup (NIC,FName,LName,Gender,DOB,Address,Status,Occupation,Contact,Email,Password) VALUES ('$nic','$fname','$lname','$gender','$dob','$address','$status','$occupation','$contact','$email','$password')";



$result=mysqli_query($db,$sql);

if(!$result){
    echo "Unsuccessful registration";
}
else{
    
}

?>