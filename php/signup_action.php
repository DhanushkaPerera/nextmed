<?php

//importing db.php
require("../db/db1.php");

$nic=$_POST["nic"];
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$gender=$_POST["gender"];
$dob=$_POST["dob"];
$contact=$_POST["contactno"];
$email=$_POST["emailaddress"];
$password=$_POST["password"];

$epassword =password_hash($password,PASSWORD_DEFAULT);

if(isset($_POST["address"])){
    $address=$_POST["address"];
}
else{
    $address=" ";
}
if(isset($_POST["civil"])){
    $status=$_POST["civil"];
}
else{
    $status=" ";
}

if(isset($_POST['bloodgroup'])){
    $bloodGroup=$_POST['bloodgroup'];
}
else{
    $bloodGroup=" ";
}



$sql="INSERT INTO signup (NIC,FName,LName,Gender,DOB,Address,Status,Contact,Email,Password) VALUES ('$nic','$fname','$lname', '$gender','$dob','$address','$status','$contact','$email', '$epassword')";



if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}


?>